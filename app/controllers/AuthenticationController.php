<?php


/**
* AuthenticationController used to allow user to login/ loginout/ segue to register modal
*
* If user is validated, allow user to view their profile next
*/

class AuthenticationController extends \BaseController {


    /**
    * if authenticted allow user to see their dashboard
    * else show login
    */
	public function showLoginView() {
        if((Auth::check()))
            return Redirect::to('/dashboard');

        return View::make('login');
	}


    /**
    * attempt to login user
    * @return success -> dashboard; fails -> back to login view with data
    */
    public function loginUser() {
        $validation = Validator::make(Input::all(),[
            'username' =>' required',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }


        //get username and password, if validated redirect to dashboard
        if (Auth::attempt(Input::only('username', 'password'), true)) {
            return Redirect::to('/dashboard');
        } else {
            Session::flash('error_message', 'Invalid credentials');
            return Redirect::back()->withInput();
        }
    }


    // logout -> delete user session and logout the user. 
    // redirect user to login view
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
