<?php

namespace App\Http\Controllers;

use DB;
use App\PostalCode;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;

class PostalCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	try {
    		
    		$page = Input::get('page');
    		$start = Input::get('start');
    		$limit = Input::get('limit');
    			
    		if ($start!=null && $limit!=null)
    			$postalCodes = DB::table('set_postalcodes')
	    			->select(array('set_postalcodes.*'))
	    			->skip($start)->take($limit)->get();
    		else
    			$postalCodes = PostalCode::all();
    		
    		
    		return json_encode(array(
    				'success' => true,
    				'data' => $postalCodes,
    				'total' => count(PostalCode::all())
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
    		$postalCode = new PostalCode();
    		$postalCode->fill($data);
    		$postalCode->id = Uuid::generate();
    		$postalCode->save();
    		return json_encode(array(
    				'success' => true,
    				'data' => $postalCode
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
    		$country = PostalCode::find($id);
    		$country->fill($data);
    		$country->save();
    		return json_encode(array(
    				'success' => true,
    				'message' => 'Postal Code successfully updated.'
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostalCode  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	try {
    		$postalCode = PostalCode::find($id);
    		return json_encode(array(
    				'success' => true,
    				'data' => $postalCode
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostalCode  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	try {
    		$postalCode = PostalCode::find($id);
    		$postalCode->delete();
    		return json_encode(array(
    				'success' => true,
    				'message' => 'PostalCode successfully deleted.'
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }
}
