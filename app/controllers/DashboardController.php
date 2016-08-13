<?php

class DashboardController extends \BaseController {

    public function showDashboardView(){

        if(!(Auth::check()))
            return Redirect::to('/login');


        return View::make('dashboard');
    }
}
