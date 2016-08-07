<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
//Justin was here
//so was mostafa
Route::get("/", function(){
    return Redirect::to('/login');
});

// Login/Logout Routes
Route::get('/login', 'AuthenticationController@showLoginView');
Route::post('/login', 'AuthenticationController@loginUser');
Route::get('/logout', 'AuthenticationController@logout');

Route::get('/show', 'AuthenticationController@showUsers');

// Signup Routes
Route::post('/signup', 'RegistrationController@signUp');

// Dashboard Routes
Route::get('/dashboard', 'DashboardController@showDashboardView');

// Movie Routes
Route::get('/movie', 'MovieController@showMovieView');
Route::get('/movie/{id}', 'MovieController@show');
Route::post('/searchMovies', 'MovieController@searchMovies');

// Vinyl Routes
Route::get('/vinyl', 'VinylController@showVinylView');