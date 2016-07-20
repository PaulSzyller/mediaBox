<?php

class AuthenticationController extends \BaseController {

	public function showLoginView(){
		return View::make('login');
	}

    public function loginUser(){
        $validation = Validator::make(Input::all(),[
            'username' =>' required',
            'password' => 'required',
        ]);

        if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

        if (Auth::attempt(Input::only('username', 'password'), true)){
            return Redirect::to('/dashboard');
        }else{
            Session::flash('error_message', 'Invalid credentials');
            return Redirect::to('/login');
        }
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect::to('/login');
    }
}
