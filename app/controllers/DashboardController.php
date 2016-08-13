<?php

class DashboardController extends \BaseController {


	/*
	* Check user validation status to allow them to view their dashboard.
	* fail to authorize -> show user login view first/ else create dashboard view
	*/
    public function showDashboardView(){

        if(!(Auth::check()))
            return Redirect::to('/login');


        return View::make('dashboard');
    }
}
