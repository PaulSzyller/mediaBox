<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    function getMovie($id)
    {
        // returns information of a movie
        return Tmdb::getMoviesApi()->getMovie($id);
    }

}
