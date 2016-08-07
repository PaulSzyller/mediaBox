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
            'first_name' =>' required',
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

        $user = Auth::user();
        $user->first_name = Input::get('first_name');
        $user->save();

        return Redirect::to('/profile');

    }

}
