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

        return View::make('movies');
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

        /*
        $validation = Validator::make(Input::all(), [
            'username' => 'required|unique:MediaBoxUser',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:MediaBoxUser',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'gender' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);

        if ($validation->fails()) {
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }*/

        $imdb_id = Input::get('imdb_id');
        if (!($movie = Movie::where('imdb_id', '=', $imdb_id)->exists())) {
            $title = Input::get('title');
            $genre = Input::get('genre');
            $homepage = Input::get('homepage');
            $overview = Input::get('overview');
            $user_rating = Input::get('user_rating');
            $poster_path = Input::get('poster_path');
            $release_date = Input::get('release_date');
            $status = Input::get('status');
            $tag_line = Input::get('tag_line');

            try {
                $movie = Movie::create([
                    'title' => $title,
                    'genre' => $genre,
                    'homepage' => $homepage,
                    'overview' => $overview,
                    'user_rating' => $user_rating,
                    'poster_path' => $poster_path,
                    'release_date' => $release_date,
                    'status' => $status,
                    'tag_line' => $tag_line
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


}
