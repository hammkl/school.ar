<?php

namespace App\Http\Controllers;

use App\TargetLink;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;
use DB;

class TargetLinkController extends Controller
{
	public function index($target)
	{
		try {
			$links = DB::table('ar_targetlinks')
				->where('ar_targetlinks.target_id', $target)
				->get();
			return json_encode(array(
					'success' => true,
					'data' => $links
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function store($target)
	{
		try {
			$data = Input::json()->all();
			
			$targetLink= new TargetLink;
			$targetLink->fill($data);
			$targetLink->id = (string)Uuid::generate();
			
			$targetLink->save();
			return json_encode(array(
					'success' => true,
					'data' => $targetLink,
					'message' => 'Target Link successfully saved.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function update($target, $id)
	{
		try {
			$data = Input::json()->all();
			$targetLink = TargetLink::find($id);
			$targetLink->fill($data);
			$targetLink->save();
			return json_encode(array(
					'success' => true,
					'data' => $targetLink,
					'message' => 'Target Link successfully saved.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function show($target, $id)
	{
		try {
			$targetLink= TargetLink::find($id);
			return json_encode(array(
					'success' => true,
					'data' => $targetLink
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function destroy($target, $id)
	{
		try {
			$targetLink = TargetLink::find($id);
			$targetLink->delete();
			return json_encode(array(
					'success' => true,
					'message' => 'Target Link successfully deleted.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
}