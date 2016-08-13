<?php

use Intervention\Image\Commands\ResponseCommand;

class MovieController extends \BaseController {


    /**
 * Display the full list of movies a user has in their collection.
 *
 * @return ResponseCommand
 */
    public function showMovieView()
    {
        if(!(Auth::check()))
            return Redirect::to('/login');

        $user = Auth::user();
        $movies = [];
        $user_movies = UserToMovie::where('user_id', '=', $user->id)->get();
        foreach ($user_movies as $movie) {
            array_push($movies, Movie::where('id', '=', $movie->movie_id)->get()->first());
        }


        return View::make('movies', [
            'user' => $user,
            'movies' => $movies
        ]);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// returns information of a movie

        return Tmdb::getMoviesApi()->getMovie($id);
	}

    /**
     * Searches the TMDB movie database and returns an array of all the movies the user searches for by
     * title (string)
     * @return an array of objects that correspond to the title the user searches by
     */
    public function searchMovies() {
        $query = Input::get('title');

        if (!$query) {
            return Redirect::back();
        }

        $results = [];
        $response = Tmdb::getSearchApi()->searchMovies($query);
        $num_of_pages = $response['total_pages'];

        if ($num_of_pages > 1) {
            for($i = 1; $i <= $num_of_pages; $i++){
                $response = Tmdb::getSearchApi()->searchMovies($query, array('page' => $i));
                $movies = $response['results'];
                foreach($movies as $movie){
                    array_push($results, $movie);
                }
            }
        }
        else {
            $movies = $response['results'];
            foreach($movies as $movie){
                array_push($results, $movie);
            }
        }
        return Redirect::back()->with('search_result', $results);
    }

    public function addMovie() {

        $user = Auth::user();
        $id = Input::get('id');

        if (!($movie = Movie::where('tmdb_id', '=', $id)->get()->first())) {

            $tmdb = Tmdb::getMoviesApi()->getMovie($id);

            try {
                $movie = Movie::create([
                    'title' => $tmdb['title'],
                    'genre' => $tmdb['genres'][0]['name'],
                    'homepage' => $tmdb['homepage'],
                    'tmdb_id' => $id,
                    'imdb_id' => $tmdb['imdb_id'],
                    'overview' => $tmdb['overview'],
                    'user_rating' => 0,
                    'poster_path' => $tmdb['poster_path'],
                    'release_date' => $tmdb['release_date'],
                    'status' => $tmdb['status'],
                    'tag_line' => $tmdb['tagline']
                ]);
            } catch (Exception $e) {
                //Errors Log
                Session::flash('error_message', 'Oops! Something is wrong!');

                return $e;
                return Redirect::back();
            }
        }

        if (UserToMovie::where('user_id', '=', $user->id)->where('movie_id', '=', $movie->id)->exists()) {
            //display error message
            return Redirect::to('/movie');
        }

        try {
            UserToMovie::create([
                'user_id' => $user->id,
                'movie_id' => $movie->id
            ]);

        } catch (Exception $e) {
            //Errors Log
            Session::flash('error_message', 'Oops! Something is wrong!');

            return $e;
            return Redirect::back();
        }

        return Redirect::to('/movie');
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	/**
	 * When search gets hit, call this function to get 
	 * data from api
	 * 
	 */

	public function search($name){

		//call to database with the name


		//get JSON results

		//go through results and display them (or return as array)

		

	}


}
