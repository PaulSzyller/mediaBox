<?php

class AuthenticationController extends \BaseController {

	public function showLoginView(){

		return View::make('login');

	}
}
