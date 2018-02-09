<?php

namespace App\Http\Controllers;

use App\Target;
use App\User;
use App\TargetFile;
use Illuminate\Support\Facades\Input;
use Webpatser\Uuid\Uuid;
use DB;
use ZipArchive;

class TargetController extends Controller
{
    public function index()
	{
		try {
			
			$page = Input::get('page');
			$start = Input::get('start');
			$limit = Input::get('limit');
			
			$catalogue = Input::get('catalogue');
			$publisher = Input::get('publisher');
			
			$user = User::find(Input::get('userId'));
			
			$targets = DB::table('ar_targets');
			
			if ($catalogue!=null) {
				$targets = $targets 
							->select('ar_targets.*', 'set_catalogues.id as catalogue_id', 'set_catalogues.name as catalogue_name')
							->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
							->where('ar_targets.catalogue_id', $catalogue);
				if ($user && $user->isAdmin!=1) {
					if ($user->isProfessor==1)
						$targets = $targets->where('set_catalogues.professor_id', $user->id);
				}
			}
			else if ($publisher!=null) {
				$targets = $targets
							->select('ar_targets.*', 'set_catalogues.id as catalogue_id', 'set_catalogues.name as catalogue_name')
							->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id')
							->where('set_catalogues.publisher_id', $publisher);
				if ($user && $user->isAdmin!=1) {
					if ($user->isProfessor==1)
						$targets = $targets->where('set_catalogues.professor_id', $user->id);
				}
			}
			else {
				$targets = $targets
							->select('ar_targets.*', 'set_catalogues.id as catalogue_id', 'set_catalogues.name as catalogue_name')
							->leftJoin('set_catalogues', 'set_catalogues.id', '=', 'ar_targets.catalogue_id');
				if ($user && $user->isAdmin!=1) {
					if ($user->isProfessor==1)
						$targets = $targets->where('set_catalogues.professor_id', $user->id);
				}
			}
			
			if ($start!=null && $limit!=null)
				$targets = $targets->skip($start)->take($limit)->get();
			else
				$targets = $targets->get();
			
			return json_encode(array(
					'success' => true,
					'data' => $targets,
					'total' => count(Target::all())
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
			$target= new Target;
			$target->fill($data);
			$target->id = (string)Uuid::generate();
			$target->save();
			return json_encode(array(
					'success' => true,
					'data' => $target,
					'message' => 'Target successfully saved.'
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
			$target = Target::find($id);
			$target->fill($data);
			$target->save();
			return json_encode(array(
					'success' => true,
					'data' => $target,
					'message' => 'Target successfully saved.'
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
			$target= Target::find($id);
			return json_encode(array(
					'success' => true,
					'data' => $target
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
			$target= Target::find($id);
			$target->delete();
			return json_encode(array(
					'success' => true,
					'message' => 'Target successfully deleted.'
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
				$target = Target::find($data['id']);
				$target->fill($data);
			} else {
				$target= new Target;
				$target->fill($data);
				$target->id = (string)Uuid::generate();
			}
			$target->save();
			
			$targetfile = Input::file('targetfile');
			$targetFileId = (string)Uuid::generate();
			if ($targetfile) {
				$oldTargetImage = TargetFile::where('ar_targetfiles.target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'image')->first();
				if ($oldTargetImage) $oldTargetImage->delete();
				
				$newFile = new TargetFile;
				$newFile->id = $targetFileId;
				$newFile->filetype = 'image';
				$newFile->fill(array(
					'target_id' => $target->id,
					'filename' => $targetfile->getClientOriginalName(),
					'size' => $targetfile->getClientSize(),
					'mimetype' => $targetfile->getClientMimeType(),
					'data' => file_get_contents($targetfile->getRealPath())
				));
				$newFile->save();
			}
			
			$isetfile = Input::file('isetfile');
			$isetFileId = (string)Uuid::generate();
			if ($isetfile) {
				$oldTargetImage = TargetFile::where('ar_targetfiles.target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'iset')->first();
				if ($oldTargetImage) $oldTargetImage->delete();
				
				$newFile = new TargetFile;
				$newFile->id = $isetFileId;
				$newFile->filetype = 'iset';
				$newFile->fill(array(
						'target_id' => $target->id,
						'filename' => $isetfile->getClientOriginalName(),
						'size' => $isetfile->getClientSize(),
						'mimetype' => $isetfile->getClientMimeType(),
						'data' => file_get_contents($isetfile->getRealPath())
				));
				$newFile->save();
			}
			
			$fsetfile = Input::file('fsetfile');
			$fsetFileId = (string)Uuid::generate();
			if ($fsetfile) {
				$oldTargetImage = TargetFile::where('ar_targetfiles.target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'fset')->first();
				if ($oldTargetImage) $oldTargetImage->delete();
				
				$newFile = new TargetFile;
				$newFile->id = $fsetFileId;
				$newFile->filetype = 'fset';
				$newFile->fill(array(
						'target_id' => $target->id,
						'filename' => $fsetfile->getClientOriginalName(),
						'size' => $fsetfile->getClientSize(),
						'mimetype' => $fsetfile->getClientMimeType(),
						'data' => file_get_contents($fsetfile->getRealPath())
				));
				$newFile->save();
			}
			
			$fset3file = Input::file('fset3file');
			$fset3FileId = (string)Uuid::generate();
			if ($fset3file) {
				$oldTargetImage = TargetFile::where('ar_targetfiles.target_id', '=', $target->id)->where('ar_targetfiles.filetype', '=', 'fset3')->first();
				if ($oldTargetImage) $oldTargetImage->delete();
				
				$newFile = new TargetFile;
				$newFile->id = $fset3FileId;
				$newFile->filetype = 'fset3';
				$newFile->fill(array(
						'target_id' => $target->id,
						'filename' => $fset3file->getClientOriginalName(),
						'size' => $fset3file->getClientSize(),
						'mimetype' => $fset3file->getClientMimeType(),
						'data' => file_get_contents($fset3file->getRealPath())
				));
				$newFile->save();
			}
			
			//$output = shell_exec('ls -lart');
			
			unset($data['targetfile']);
			
			unset($data['isetfile']);
			unset($data['fsetfile']);
			unset($data['fset3file']);
			
			unset($data['data']);
			
			return json_encode(array(
					'success' => true,
					'data' => $data,
					'message' => 'Target successfully saved.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function image($id) {
		$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'image')->first();
		if ($file!=null) {
			header('Content-type: ' . $file->mimetype);
			header('Content-Length: ' . $file->size);
			header('Content-Disposition: attachment; filename=' . $file->filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 3600');
			print $file->data;
		}
	}
	
	public function iset($id) {
		$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'iset')->first();
		if ($file!=null) {
			header('Content-type: ' . $file->mimetype);
			header('Content-Length: ' . $file->size);
			header('Content-Disposition: attachment; filename=' . $file->filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 3600');
			print $file->data;
		}
	}
	
	public function fset($id) {
		$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'fset')->first();
		if ($file!=null) {
			header('Content-type: ' . $file->mimetype);
			header('Content-Length: ' . $file->size);
			header('Content-Disposition: attachment; filename=' . $file->filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 3600');
			print $file->data;
		}
	}
	
	public function fset3($id) {
		$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'fset3')->first();
		if ($file!=null) {
			header('Content-type: ' . $file->mimetype);
			header('Content-Length: ' . $file->size);
			header('Content-Disposition: attachment; filename=' . $file->filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 3600');
			print $file->data;
		}
	}
	
	public function pack($id) {
		$zip = new ZipArchive;
		$archive_file_name = sys_get_temp_dir() .'/'. $id . '.zip';
		if ($zip->open($archive_file_name, ZIPARCHIVE::CREATE) === TRUE) {
			$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'image')->first();
			$zip->addFromString($file->filename, $file->data);
			$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'iset')->first();
			$zip->addFromString($file->filename, $file->data);
			$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'fset')->first();
			$zip->addFromString($file->filename, $file->data);
			$file = TargetFile::where('target_id', '=', $id)->where('ar_targetfiles.filetype', '=', 'fset3')->first();
			$zip->addFromString($file->filename, $file->data);
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
	

}
