<?php

namespace App\Http\Controllers;

use DB;
use App\Publisher;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;

class PublisherController extends Controller
{
	public function index()
	{
		try {
			
			$page = Input::get('page');
			$start = Input::get('start');
			$limit = Input::get('limit');
			
			if ($start!=null && $limit!=null)
				$publishers = DB::table('set_publishers')->skip($start)->take($limit)->get();
			else
				$publishers = Publisher::all();
			
			return json_encode(array(
					'success' => true,
					'data' => $publishers,
					'total' => count(Publisher::all())
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function store()
	{
		try {
			$data = Input::json()->all();
			$publisher= new Publisher;
			$publisher->fill($data);
			$publisher->id = (string)Uuid::generate();
			if($publisher->active == null) $publisher->active = FALSE;
			$publisher->save();
			return json_encode(array(
					'success' => true,
					'data' => $publisher,
					'message' => 'Publisher successfully saved.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function update($id)
	{
		try {
			$data = Input::json()->all();
			$publisher = Publisher::find($id);
			$publisher->fill($data);
			if (!empty($publisher->id) && empty($publisher->password)) {
				$old = Publisher::find($publisher->id);
				$publisher->password = $old->password;
			}
			$publisher->save();
			return json_encode(array(
					'success' => true,
					'data' => $publisher,
					'message' => 'Publisher successfully saved.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function show($id)
	{
		try {
			$publisher= Publisher::find($id);
			return json_encode(array(
					'success' => true,
					'data' => $publisher
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function destroy($id)
	{
		try {
			$publisher = Publisher::find($id);
			$publisher->delete();
			return json_encode(array(
					'success' => true,
					'message' => 'Publisher successfully deleted.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
}
