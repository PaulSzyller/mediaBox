<?php

class DashboardController extends \BaseController {

    public function showDashboardView(){

        if(Auth::check())
            return View::redirect('dashboard');

        return View::make('login');

        return View::make('dashboard');
    }
}
