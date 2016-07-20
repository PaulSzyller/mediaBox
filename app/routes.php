<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

// Main Routes
Route::get('/login', 'AuthenticationController@showLoginView');

// Movie Routes
//Route::get('/movie', 'MovieController@showAllMovies');
Route::get('/movie/{id}', 'MovieController@show');
