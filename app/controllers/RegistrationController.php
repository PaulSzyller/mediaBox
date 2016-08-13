<?php

class RegistrationController extends \BaseController
{

    public function signUp()
    {
        $validation = Validator::make(Input::all(), [
            'username' => 'required|unique:MediaBoxUser',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:MediaBoxUser',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'gender' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

        $username = Input::get('username');
        $fname = Input::get('fname');
        $lname = Input::get('lname');
        $email = Input::get('email');
        $password = Input::get('password');
        $location = Input::get('location');
        $dob = Input::get('dob');
        $gender = Input::get('gender');
        $question = Input::get('question');
        $answer = Input::get('answer');
        $remember_token = Input::get('remember_token');

        try {
            User::create([
                'username' => $username,
                'first_name' => $fname,
                'last_name' => $lname,
                'email' => $email,
                'password' => Hash::make($password),
                'location' => $location,
                'dob' => $dob,
                'gender' => $gender,
                'question' => $question,
                'answer' => $answer,
                'remember_token' => $remember_token
            ]);

        } catch (Exception $e) {
            //Errors Log
            Session::flash('error_message', 'Oops! Something is wrong!');

            return $e;
            return Redirect::back()->withInput();
        }
        
        //if signup successful, attempt to login user
        if (Auth::attempt(Input::only('username', 'password'), true)) {
            $usr = Auth::user();
            Session::put('usr', $usr);
            return Redirect::to('/dashboard');
        } else {
            Session::flash('error_message', 'Invalid credentials');
            return Redirect::to('/login');
        }
    }

}