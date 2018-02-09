<?php

namespace App\Http\Controllers;

use DB;
use App\Country;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;

class CountryController extends Controller
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
    			$countries = DB::table('set_countries')->skip($start)->take($limit)->get();
    		else
    			$countries = Country::all();
    		
    		return json_encode(array(
    				'success' => true,
    				'data' => $countries,
    				'total' => count(Country::all())
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }
    
    /**
     * Saves the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    	try {
    		$data = Input::json()->all();
    		$country = new Country;
    		$country->fill($data);
    		$country->id = (string)Uuid::generate();
    		$country->save();    		
    		return json_encode(array(
    				'success' => true,
    				'data' => $country
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
    		$country = Country::find($id);
    		$country->fill($data);
    		$country->save();
    		return json_encode(array(
    				'success' => true,
    				'message' => 'Country successfully updated.'
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	try {
    		$country = Country::find($id); 
    		return json_encode(array(
    				'success' => true,
    				'data' => $country
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }

    /**
     * Deletes the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	try {
    		$country = Country::find($id);
    		$country->delete();
    		return json_encode(array(
    				'success' => true,
    				'message' => 'Country successfully deleted.'
    		));
    	} catch(Exception $e) {
    		return json_encode(array(
    				'success' => false,
    				'message' => 'Error: ' . $e->getMessage()
    		));
    	}
    }
}
