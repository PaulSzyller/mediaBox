<?php

class DashboardController extends \BaseController {


	/*
	* Check user validation status to allow them to view their dashboard.
	* fail to authorize -> show user login view first/ else create dashboard view
	*/
    public function showDashboardView(){

        if(!(Auth::check()))
            return Redirect::to('/login');

        $user = Auth::user();
        $user_movies = UserToMovie::where('user_id', '=', $user->id)->get();
        $movie_count = 0;
        foreach ($user_movies as $movie) {
            $movie_count++;
        }

        return View::make('dashboard',[
            'movie_count' => $movie_count
        ]);
    }
}
