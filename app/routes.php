<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Login/Logout Routes
Route::get('/login', 'AuthenticationController@showLoginView');
Route::post('/login', 'AuthenticationController@loginUser');
Route::post('/logout', 'AuthenticationController@logoutUser');

Route::get('/show', 'AuthenticationController@showUsers');

// Signup Routes

// Dashboard Routes
Route::get('/dashboard', 'DashboardController@showDashboardView');

// Movie Routes
Route::get('/movie', 'MovieController@showMovieView');
Route::get('/movie/{id}', 'MovieController@show');

// Vinyl Routes
Route::get('/vinyl', 'VinylController@showVinylView');