<?php

class RegistrationController extends \BaseController
{

    public function signUp()
    {

        $validation = Validator::make(Input::all(), [
            'username' => 'required|unique:MediaBoxUser',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
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
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
        $confirm_password = Input::get('confirm_password');
        $gender = Input::get('gender');
        $question = Input::get('question');
        $answer = Input::get('answer');
        $profile_pic = Input::get('profile_pic');
        $remember_token = Input::get('remember_token');

        //compare passwords
        if ($password != $confirm_password) {
            Session::flash('error_message', 'Passwords do not match');
            return Redirect::back()->withInput();
        }

        try {
            User::create([
                'username' => $username,
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'gender' => $gender,
                'question' => $question,
                'answer' => $answer,
                'profile_pic' => $profile_pic,
                'remember_token' => $remember_token
            ]);

        } catch (Exception $e) {
            //Errors Log
            Session::flash('error_message', 'Oops! Something is wrong!');

            return $e;
            return Redirect::back()->withInput();
        }

        Session::flash('success_message', 'Success! Welcome to MediaBox');
        return Redirect::to('/dashboard');
    }

}