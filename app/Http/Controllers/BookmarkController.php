<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Bookmark;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;

class BookmarkController extends Controller
{
    public function index()
	{
		try {
			$userId = Input::get('userId');
			$target = Input::get('target');
			
			$page = Input::get('page');
			$start = Input::get('start');
			$limit = Input::get('limit');
			
			$bookmarks = array();
			if ($userId!=null) {
				$bookmarks = DB::table('ar_bookmarks')
									->select(array('ar_bookmarks.id', 'set_users.name', 'set_users.surname', 'ar_targets.name as targetname', 'ar_targets.id as targetid', 'set_catalogues.name as cataloguename', 'set_cataloguetypes.name as cataloguetypename'))
									->leftJoin('set_users', 'ar_bookmarks.user_id', '=', 'set_users.id')
									->leftJoin('ar_targets', 'ar_bookmarks.target_id', '=', 'ar_targets.id')
									->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
									->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id')
									->where('user_id', $userId);
				
				if ($target != null) 
					$bookmarks = $bookmarks->where('target_id', $target);
				
				if ($start!=null && $limit!=null)
					$bookmarks = $bookmarks->skip($start)->take($limit)->get();
				else
					$bookmarks = $bookmarks->get();
					
			} 
		/*	else {
				$bookmarks = DB::table('ar_bookmarks')
									->select(array('ar_bookmarks.id', 'set_users.name', 'set_users.surname', 'ar_targets.name as targetname', 'ar_targets.id as targetid', 'set_catalogues.name as cataloguename', 'set_cataloguetypes.name as cataloguetypename'))
									->leftJoin('set_users', 'ar_bookmarks.user_id', '=', 'set_users.id')
									->leftJoin('ar_targets', 'ar_bookmarks.target_id', '=', 'ar_targets.id')
									->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
									->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id');
				if ($user->isAdmin!=1) {
					if ($user->isProfessor==1)
						$bookmarks = $bookmarks->where('set_catalogues.professor_id', $user->id);
				}
					
				$bookmarks = $bookmarks->get();
			}*/
			return json_encode(array(
					'success' => true,
					'data' => $bookmarks,
					'total' => count(Bookmark::all())
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function getBookmarksForTarget($id) {
		try {
			$user = User::find(Input::get('userId'));
			$target = Input::get('target');
			$bookmarks = DB::table('ar_bookmarks')
				->select(array('ar_bookmarks.id', 'set_users.name', 'set_users.surname', 'ar_targets.name as targetname', 'ar_targets.id as targetid', 'set_catalogues.name as cataloguename', 'set_cataloguetypes.name as cataloguetypename'))
				->leftJoin('set_users', 'ar_bookmarks.user_id', '=', 'set_users.id')
				->leftJoin('ar_targets', 'ar_bookmarks.target_id', '=', 'ar_targets.id')
				->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
				->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id')
				->where('target_id', $target);
			
			if ($user->isAdmin!=1) {
				if ($user->isProfessor==1)
					$bookmarks = $bookmarks->where('set_catalogues.professor_id', $user->id);
			}
			$bookmarks = $bookmarks->get();
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function getBookmarksForUser($id) {
		try {
			$bookmarks = DB::table('ar_bookmarks')
				->select(array('ar_bookmarks.id', 'set_users.name', 'set_users.surname', 'ar_targets.name as targetname', 'ar_targets.id as targetid', 'set_catalogues.name as cataloguename', 'set_cataloguetypes.name as cataloguetypename'))
				->leftJoin('set_users', 'ar_bookmarks.user_id', '=', 'set_users.id')
				->leftJoin('ar_targets', 'ar_bookmarks.target_id', '=', 'ar_targets.id')
				->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
				->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id')
				->where('user_id', $userId)
				->get();
			return json_encode(array(
					'success' => true,
					'data' => $bookmarks
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
			$bookmark = new Bookmark;
			$bookmark->fill($data);
			$bookmark->id = (string)Uuid::generate();
			$bookmark->save();
			return json_encode(array(
					'success' => true,
					'data' => $bookmark
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
			$bookmark = Bookmark::find($id);
			$bookmark->fill($data);
			$bookmark->save();
			return json_encode(array(
					'success' => true,
					'message' => 'Bookmark successfully updated.'
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
			$bookmark = Bookmark::find($id);
			return json_encode(array(
					'success' => true,
					'data' => $bookmark
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
			$bookmark = Bookmark::find($id);
			$bookmark->delete();
			return json_encode(array(
					'success' => true,
					'message' => 'Bookmark successfully deleted.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
}
