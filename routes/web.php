<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Target;
use App\TargetFile;
use App\TargetLink;
use Webpatser\Uuid\Uuid;

Route::get('/', function () {
    return view('index');
});



Route::get('excel-import', function () {
	// http://localhost/assets/panel/excel/test123.xls
	// /public/assets/panel/excel/test123.xls
	$address = './assets/excel/gd1_json_data_-all.csv_2017-09-28_11-18-13.058150.xls';
	
	Excel::load($address, function($reader) {
		
 		$images = 'C:/Temp/schoolar/images/';
		$results = $reader->get();
		
		foreach($results as $result) {
			//dd($result);
			//dd($result->feature_picture_info);
			//dd($result->target);
			
			echo "Processing target: " . $images . $result->feature_picture_info;
			if (File::exists($images . $result->feature_picture_info))
			{

				echo " ... Found ... ";
				
				$newFile = new TargetFile;
				$file = File::get($images . $result->feature_picture_info);
				$filesize = File::size($images . $result->feature_picture_info);
				echo "Filesize: " . $filesize . " ";
				$mimetype = File::mimeType($images . $result->feature_picture_info);
				echo "Mime: " . $mimetype . " ";
				$content = File::get($images . $result->feature_picture_info);
				
				$newFile->fill(array(
						'filename' => $result->feature_picture_info,
						'size' => $filesize,
						'mimetype' => $mimetype,
						'data' => $content
				));
				$newFile->id = (string)Uuid::generate();
				$newFile->save();
				
				$target= new Target;
				$target->fill(array(
						'catalogue_id' => 'c51b22e0-9cb8-11e7-8ccd-7b105eddc21e',
						'targetfile_id' => $newFile->id,
						'isetfile_id' => null,
						'fsetfile_id' => null,
						'fset3file_id' => null,
						'name' => $result->feature_picture_info
				));
				$target->id = (string)Uuid::generate();
				$target->save();
				
				$targetLink = new TargetLink;
				$targetLink->fill(array(
						'target_id' => $target->id,
						'link' => $result->target,
						'description' => $result->feature_picture_info
				));
				$targetLink->id = (string)Uuid::generate(); 
				$targetLink->save();
				echo "... Done. ";
			}
			
			echo "<br />\n";
			
		}
			
		
		
	});
});