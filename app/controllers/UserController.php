<?php
class UserController extends BaseController {

	public function index()
			{
			$users = User::all();
			return View::make('users.index',compact('users'));
			}
	public function getCreate()
		{
		return View::make('users.register');
		}
	public function postCreate()
		{
		$rules = array(
		'name'=>'required',
		'email'=>'required',
		'password'=>'required|confirmed',
		'password_confirmation'=>'required',
		'permission'=>'required');
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes())
		{
		$user = new User;
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->permission = Input::get('permission');
		$user->save();
 		return Redirect::to('user/login')->with('message', 'Thanks for registering!');
    	}
   		return Redirect::to('user/register')->withErrors($validator)->withInput();
		}

		public function login(){
		return View::make('users.login');
}
	public function postLogin()
		{
		$credentials = Input::only('email', 'password');
		
		if (Auth::attempt($credentials))
		 {
			return Redirect::intended('/');
		}
		return Redirect::to('login');
		}




	public function logout()
		{
		Auth::logout();
		return Response::make('You are now logged out. ');
		}
}