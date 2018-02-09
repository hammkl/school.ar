<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login', array('uses' => 'UserController@doLogin'));
Route::post('mobilelogin', array('uses' => 'UserController@doMobileLogin'));
Route::post('signup', array('uses' => 'UserController@doSignup'));
Route::get('logout', array('uses' => 'UserController@doLogout'));
Route::get('confirm/{id}', 'UserController@doConfirm');
	
Route::resource('user', 'UserController');
Route::get('user/{id}/catalogues', 'CatalogueController@getUserCatalogues');
Route::get('user/{id}/bookmarks', 'BookmarkController@getBookmarksForUser');

Route::get('professor', 'UserController@professors');
Route::resource('country', 'CountryController');
Route::resource('postalcode', 'PostalCodeController');
Route::resource('cataloguetype', 'CatalogueTypeController');

Route::resource('bookmark', 'BookmarkController');
Route::get('target/{id}/bookmarks', 'BookmarkController@getBookmarksForTarget');

Route::resource('catalogue', 'CatalogueController');
Route::post('catalogue/upload', 'CatalogueController@upload');
Route::get('catalogue/{id}/targets', 'CatalogueController@targets');
Route::get('catalogue/{id}/pack', 'CatalogueController@pack');

Route::resource('publisher', 'PublisherController');
Route::resource('target', 'TargetController');
Route::post('target/upload', 'TargetController@upload');

Route::get('catalogue/{id}/image', 'CatalogueController@image');
Route::get('target/{id}/image', 'TargetController@image');

Route::get('target/{id}/iset', 'TargetController@iset');
Route::get('target/{id}/fset', 'TargetController@fset');
Route::get('target/{id}/fset3', 'TargetController@fset3');
Route::get('target/{id}/pack', 'TargetController@pack');

//Route::resource('target/{target}/link', 'TargetLinkController@index');
Route::get('target/{target}/link', 'TargetLinkController@index');
Route::get('target/{target}/link/{id}', 'TargetLinkController@show');
Route::post('target/{target}/link', 'TargetLinkController@store');
Route::put('target/{target}/link/{id}', 'TargetLinkController@update');
Route::delete('target/{target}/link/{id}', 'TargetLinkController@destroy');