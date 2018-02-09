<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;

class UserController extends Controller
{
	public function index()
	{
		try {
			
			$page = Input::get('page');
			$start = Input::get('start');
			$limit = Input::get('limit');
			
			if ($start!=null && $limit!=null)
				$users = DB::table('set_users')->skip($start)->take($limit)->get();
			else
				$users = User::all();
			
			
			return json_encode(array(
					'success' => true,
					'data' => $users,
					'total' => count(User::all())
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function professors()
	{
		try {
			$users = User::where('isProfessor', 1)->get();
			return json_encode(array(
					'success' => true,
					'data' => $users
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
			$user= User::find($id);
			return json_encode(array(
					'success' => true,
					'data' => $user
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
			$user= new User;
			$user->fill($data);
			$user->id = (string)Uuid::generate();
			$user->password = \Hash::make($user->password);
			$user->save();
			return json_encode(array(
					'success' => true,
					'data' => $user,
					'message' => 'User successfully saved.'
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
			$user = User::find($id);
			$user->fill($data);
			if (!empty($user->id) && empty($user->password)) {
				$old = User::find($user->id);
				$user->password = $old->password;
			} else {
				$user->password = \Hash::make($user->password);
			}
			$user->save();
			return json_encode(array(
					'success' => true,
					'data' => $user,
					'message' => 'User successfully saved.'
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
			$user = User::find($id);
			$user->delete();
			return json_encode(array(
					'success' => true,
					'message' => 'User successfully deleted.'
			));
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function doSignup() {
		try {
			$rules = array (
					'name' => 'required',
					'surname' => 'required',
					'email' => 'required|email', // make sure the email is an actual email
					'password' => 'required|alphaNum|min:3'  // password can only be alphanumeric and has to be greater than 3 characters
			);
			
			// run the validation rules on the inputs from the form
			$validator = Validator::make ( Input::all(), $rules );
			
			// if the validator fails, redirect back to the form
			if ($validator->fails ()) {
				return json_encode(array(
						'success' => false,
						'message' => $validator->errors()->first()
				));
			} else {
				$data = Input::all();
				$user= new User;
				$user->fill($data);
				
				if(array_key_exists ( 'professorEmail' , $data)) {
					$professor = User::where('email', $data['professorEmail'])->first();
					$user->professor_id = $professor->id;
				}
				
				$user->id = (string)Uuid::generate();
				$user->password = \Hash::make($user->password);
				$user->active = 0;
				$user->save();
				
				
				$message = 
					'<html><body>' .
					'Please confirm your email by clicking this <a href="http://incubator.alcyone.si/school.ar/public/api/confirm/' . $user->id .'">link</a>.' .
					'</body></html>';
				
				$headers = 
					'MIME-Version: 1.0' . "\r\n" .
					'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
					'From: info@school.ar' . "\r\n" .
					'Reply-To: info@school.ar' . "\r\n";
				
				mail(
					$user->email, 
					'School.AR Registration - Please confirm your email',
					$message,
					$headers
				);
				
				return json_encode(array(
						'success' => true,
						'data' => $user,
						'message' => 'Registration successfull. Please go to your mail application and confirm your email.'
				));
			}
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function doLogin() {
		try {
			// validate the info, create rules for the inputs
			$rules = array (
					'email' => 'required|email', // make sure the email is an actual email
					'password' => 'required|alphaNum|min:3'  // password can only be alphanumeric and has to be greater than 3 characters
			);
			
			// run the validation rules on the inputs from the form
			$validator = Validator::make ( Input::all(), $rules );
			
			// if the validator fails, redirect back to the form
			if ($validator->fails ()) {
				return json_encode(array(
					'success' => false,
					'message' => $validator->errors()->first()
				));
			} else {
				
				// create our user data for the authentication
				$userdata = array (
					'email' => Input::get ( 'email' ),
					'password' => Input::get ( 'password' ),
					'isAdmin' => Input::get ( 'isAdmin',  1)
				);
				
				// attempt to do the login
				if (Auth::attempt ( $userdata )) {
					return json_encode(array(
						'success' => true,
						'data' => Auth::user()
					));
				} 
				
				$userdata = array (
						'email' => Input::get ( 'email' ),
						'password' => Input::get ( 'password' ),
						'isProfessor' => Input::get ( 'isProfessor',  1)
				);
				
				if (Auth::attempt ( $userdata )) {
					return json_encode(array(
							'success' => true,
							'data' => Auth::user()
					));
				} 
				
				return json_encode(array(
					'success' => false,
					'message' => 'Authentication failed.'
				));
			}
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function doMobileLogin() {
		try {
			// validate the info, create rules for the inputs
			$rules = array (
					'email' => 'required|email', // make sure the email is an actual email
					'password' => 'required|alphaNum|min:3'  // password can only be alphanumeric and has to be greater than 3 characters
			);
			
			// run the validation rules on the inputs from the form
			$validator = Validator::make ( Input::all(), $rules );
			
			// if the validator fails, redirect back to the form
			if ($validator->fails ()) {
				return json_encode(array(
						'success' => false,
						'message' => $validator->errors()->first()
				));
			} else {
				
				// create our user data for the authentication
				$userdata = array (
						'email' => Input::get ( 'email' ),
						'password' => Input::get ( 'password' )						
				);
				
				// attempt to do the login
				if (Auth::attempt ( $userdata )) {
					return json_encode(array(
							'success' => true,
							'data' => Auth::user()
					));
				} else {
					return json_encode(array(
							'success' => false,
							'message' => 'Authentication failed.'
					));
				}
			}
		} catch(Exception $e) {
			return json_encode(array(
					'success' => false,
					'message' => 'Error: ' . $e->getMessage()
			));
		}
	}
	
	public function doConfirm($userId) {
		try {
			if ($userId != null) { 
				$user = User::find($userId);
				if ($user == null) die('User does not exists.'); 
				$user->active = true;
				$user->save();
				echo "Your email is confirmed.";
			}
		} catch(Exception $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
	
	public function doLogout() {
		Auth::logout();
		return Redirect::to ('login');
	}
	
}