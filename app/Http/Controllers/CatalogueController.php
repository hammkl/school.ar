<?php

namespace App\Http\Controllers;

use App\Catalogue;
use App\User;
use App\TargetFile;
use App\CatalogueFile;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;
use DB;
use ZipArchive;

class CatalogueController extends Controller
{
	public function index()
	{
		try {
			
			$page = Input::get('page');
			$start = Input::get('start');
			$limit = Input::get('limit');
			
			$publisher = Input::get('publisher');
			
			$user = User::find(Input::get('userId'));
			
			$catalogues = DB::table('set_catalogues');
			
			if ($publisher!=null) {
				$catalogues = $catalogues->select(array('set_catalogues.id', 'set_catalogues.name', 'set_cataloguetypes.id as cataloguetype_id', 
							'set_cataloguetypes.name as cataloguetype_name', 'set_publishers.id as publisher_id', 
							'set_publishers.short_name as publisher_name'))
					->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id')
					->leftJoin('set_publishers', 'set_publishers.id', '=', 'set_catalogues.publisher_id')
					->where('set_catalogues.publisher_id', $publisher);
				
				if ($user->isAdmin!=1) {
					if ($user->isProfessor==1) 
						$catalogues = $catalogues->where('set_catalogues.professor_id', $user->id);
				}
			} else {
				$catalogues = $catalogues->select(array('set_catalogues.id', 'set_catalogues.name', 'set_cataloguetypes.id as cataloguetype_id',
						'set_cataloguetypes.name as cataloguetype_name', 'set_publishers.id as publisher_id',
						'set_publishers.short_name as publisher_name'))
					->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id')
					->leftJoin('set_publishers', 'set_publishers.id', '=', 'set_catalogues.publisher_id');
				
					if ($user->isAdmin!=1) {
						if ($user->isProfessor==1)
							$catalogues = $catalogues->where('set_catalogues.professor_id', $user->id);
					}
			}
			
			if ($start!=null && $limit!=null)
				$catalogues = $catalogues->skip($start)->take($limit)->get();
			else
				$catalogues = $catalogues->get();
			
			return json_encode(array(
					'success' => true,
					'data' => $catalogues,
					'total' => count(Catalogue::all())
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function getUserCatalogues($id)
	{
		try {
			
			
			$user = User::find($id);
			
			$catalogues = DB::table('set_catalogues')
				->select(array('set_catalogues.id', 'set_catalogues.name', 'set_cataloguetypes.id as cataloguetype_id',
						'set_cataloguetypes.name as cataloguetype_name', 'set_publishers.id as publisher_id',
						'set_publishers.short_name as publisher_name'))
						->leftJoin('set_cataloguetypes', 'set_cataloguetypes.id', '=', 'set_catalogues.cataloguetype_id')
						->leftJoin('set_publishers', 'set_publishers.id', '=', 'set_catalogues.publisher_id');
			
			if ($user->isAdmin!=1) {
				if ($user->isProfessor==1) {
					$catalogues = $catalogues->where('set_catalogues.professor_id', $user->id);
				} else {
					$catalogues = $catalogues->leftJoin('set_users', 'set_users.professor_id', '=', 'set_catalogues.professor_id')
						->where('set_users.id', $id);
				}
			}
			
			$catalogues = $catalogues->get();
			return json_encode(array(
					'success' => true,
					'data' => $catalogues
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
			$catalogue = new Catalogue;
			$catalogue->fill($data);
			$catalogue->id = (string)Uuid::generate();
			$catalogue->save();
			return json_encode(array(
					'success' => true,
					'data' => $catalogue,
					'message' => 'Catalogue successfully saved.'
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
			$catalogue = Catalogue::find($id);
			$catalogue->fill($data);
			$catalogue->save();
			return json_encode(array(
					'success' => true,
					'data' => $catalogue,
					'message' => 'Catalogue successfully saved.'
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
			$catalogue= Catalogue::find($id);
			return json_encode(array(
					'success' => true,
					'data' => $catalogue
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function upload() {
		try {
			
			$data = Input::all();
			if (isset($data['id'])) {
				$catalogue = Catalogue::find($data['id']);
				$catalogue->fill($data);
			} else {
				$catalogue= new Catalogue;
				$catalogue->fill($data);
				$catalogue->id = (string)Uuid::generate();
			}
			$catalogue->save();
			
			$cataloguefile = Input::file('cataloguefile');
			$catalogueFileId = (string)Uuid::generate();
			if ($cataloguefile) {
				$oldCatalogueImage = CatalogueFile::where('set_cataloguefiles.catalogue_id', '=', $catalogue->id)->first();
				if ($oldCatalogueImage) $oldCatalogueImage->delete();
				
				$newFile = new CatalogueFile;
				$newFile->id = $catalogueFileId;
				$newFile->fill(array(
						'catalogue_id' => $catalogue->id,
						'filename' => $cataloguefile->getClientOriginalName(),
						'size' => $cataloguefile->getClientSize(),
						'mimetype' => $cataloguefile->getClientMimeType(),
						'data' => file_get_contents($cataloguefile->getRealPath())
				));
				$newFile->save();
			}
			
			unset($data['cataloguefile']);
			unset($data['data']);
			
			return json_encode(array(
					'success' => true,
					'data' => $data,
					'message' => 'Catalogue successfully saved.'
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
			$catalogue = Catalogue::find($id);
			$catalogue->delete();
			return json_encode(array(
					'success' => true,
					'message' => 'Catalogue successfully deleted.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function targets($id) {
		try {
			$targets = DB::table('ar_targets')
				->select('ar_targets.*', 'set_catalogues.id as catalogue_id', 'set_catalogues.name as catalogue_name')
				->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
				->where('ar_targets.catalogue_id', $id)
				->get();
			return json_encode(array(
				'success' => true,
				'data' => $targets
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function pack($id) {
		$zip = new ZipArchive;
		$archive_file_name = sys_get_temp_dir() .'/'. $id . '.zip';
		if ($zip->open($archive_file_name, ZIPARCHIVE::CREATE) === TRUE) {
			
			$targets = DB::table('ar_targets')
				->select('ar_targets.*', 'set_catalogues.id as catalogue_id', 'set_catalogues.name as catalogue_name')
				->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
				->where('ar_targets.catalogue_id', $id)
				->get();
			foreach($targets as $target) {
				$file = TargetFile::where('target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'image')->first();
				if ($file!=null) $zip->addFromString($file->filename, $file->data);
				$file = TargetFile::where('target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'iset')->first();
				if ($file!=null) $zip->addFromString($file->filename, $file->data);
				$file = TargetFile::where('target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'fset')->first();
				if ($file!=null) $zip->addFromString($file->filename, $file->data);
				$file = TargetFile::where('target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'fset3')->first();
				if ($file!=null) $zip->addFromString($file->filename, $file->data);
			}
			
			$zip->close();
			header("Content-type: application/zip");
			header("Content-Disposition: attachment; filename=$archive_file_name");
			header("Content-length: " . filesize($archive_file_name));
			header("Pragma: no-cache");
			header("Expires: 0");
			readfile("$archive_file_name");
		} else {
			echo 'failed.';
		}
	}
	
	public function image($id) {
		$file = CatalogueFile::where('catalogue_id', '=', $id)->first();
		if ($file!=null) {
			header('Content-type: ' . $file->mimetype);
			header('Content-Length: ' . $file->size);
			header('Content-Disposition: attachment; filename=' . $file->filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			print $file->data;
		}
	}

}
