<?php

namespace App\Http\Controllers;

use DB;
use App\CatalogueType;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;

class CatalogueTypeController extends Controller
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
    			$catalogueTypes = DB::table('set_cataloguetypes')->skip($start)->take($limit)->get();
    		else
    			$catalogueTypes = CatalogueType::all();
    		
    		return json_encode(array(
    				'success' => true,
    				'data' => $catalogueTypes,
    				'total' => count(CatalogueType::all())
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
    		$catalogueType = new CatalogueType;
    		$catalogueType->fill($data);
    		$catalogueType->id = (string)Uuid::generate();
    		$catalogueType->save();
    		return json_encode(array(
    				'success' => true,
    				'data' => $catalogueType
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
    		$catalogueType = CatalogueType::find($id);
    		$catalogueType->fill($data);
    		$catalogueType->save();
    		return json_encode(array(
    				'success' => true,
    				'message' => 'Catalogue Type successfully updated.'
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
     * @param  \App\CatalogueType  $catalogueType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	try {
    		$catalogueType= CatalogueType::find($id);
    		return json_encode(array(
    				'success' => true,
    				'data' => $catalogueType
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
     * @param  \App\CatalogueType  $catalogueType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	try {
    		$catalogueType = CatalogueType::find($id);
    		$catalogueType->delete();
    		return json_encode(array(
    				'success' => true,
    				'message' => 'Catalogue Type successfully deleted.'
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }
}
