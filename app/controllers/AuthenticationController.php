<?php

class AuthenticationController extends \BaseController {

	public function showLoginView() {
        if(Auth::check()) {
            return redirect::to('/dashboard');
        }

        return View::make('login');
	}

    public function loginUser() {
/*
        $username = Input::get('username');
        $password = Input::get('password');

        $user = User::where('username', '=', $username)->first();

        if($user->password == $password){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/login');
        }
*/
        /*
         *
         * Can't get the code below to log me in.
         *
        */

       /* $validation = Validator::make(Input::all(),[
            'username' =>' required',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            //Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }*/



        if (Auth::attempt(Input::only('username', 'password'), true)) {
            return Redirect::to('/dashboard');
        } else {
            //Session::flash('error_message', 'Invalid credentials');
            return Redirect::to('/login');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect::to('/login');
    }


    public function showUsers(){
        $users = User::all();
        return $users;
    }
}
