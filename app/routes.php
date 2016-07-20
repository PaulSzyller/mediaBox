<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Main Routes
Route::get('/login', 'AuthenticationController@showLoginView');
Route::post('/login', 'AuthenticationController@loginUser');

Route::get('/dashboard', 'DashboardController@showDashboardView');


// Movie Routes
//Route::get('/movie', 'MovieController@showAllMovies');
Route::get('/movie/{id}', 'MovieController@show');
