<?php

class ProfileController extends \BaseController {

    public function showProfileView() {
        if((Auth::check())) {
            $user = Auth::user();
            return View::make('profile', [
                'user' => $user
            ]);
        }

        return Redirect::to('/login');
    }

    public function updateProfile() {

        $validation = Validator::make(Input::all(),[
            'username' => 'required_without_all:fname,lname,email,password,confirm_password,gender,question,answer,profile_pic|unique:MediaBoxUser',
            'fname' => 'required_without_all:username,lname,email,password,confirm_password,gender,question,answer,profile_pic',
            'lname' => 'required_without_all:username,fname,email,password,confirm_password,gender,question,answer,profile_pic',
            'email' => 'required_without_all:username,fname,lname,password,confirm_password,gender,question,answer,profile_pic|email|unique:MediaBoxUser',
            'password' => 'required_without_all:username,fname,lname,email,confirm_password,gender,question,answer,profile_pic|required_with:confirm_password',
            'confirm_password' => 'required_without_all:username,fname,lname,email,password,gender,question,answer,profile_pic|required_with:password|same:password',
            'gender' => 'required_without_all:username,fname,lname,email,password,confirm_password,question,answer,profile_pic',
            'question' => 'required_without_all:username,fname,lname,email,password,confirm_password,gender,answer,profile_pic',
            'answer' => 'required_without_all:username,fname,lname,email,password,confirm_password,gender,question,profile_pic',
            'profile_pic' => 'required_without_all:username,fname,lname,email,password,confirm_password,gender,question,answer'
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

        $user = Auth::user();

        if (!empty(Input::get('username'))) {
            $user->username = Input::get('username');
        }
        if (!empty(Input::get('fname'))) {
            $user->first_name = Input::get('fname');
        }
        if (!empty(Input::get('lname'))) {
            $user->last_name = Input::get('lname');
        }
        if (!empty(Input::get('email'))) {
            $user->email = Input::get('email');
        }
        if (!empty(Input::get('password'))) {
            $user->password = Hash::make(Input::get('password'));
        }
        if (!empty(Input::get('gender'))) {
            $user->gender = Input::get('gender');
        }
        if (!empty(Input::get('question'))) {
            $user->question = Input::get('question');
        }
        if (!empty(Input::get('answer'))) {
            $user->answer = Input::get('answer');
        }
        if (!empty(Input::get('profile_pic'))) {
            $user->profile_pic = Input::get('profile_pic');
        }

        $user->save();

        return Redirect::to('/profile');

    }

}
