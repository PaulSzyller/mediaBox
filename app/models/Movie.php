<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Movie extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Movie';
    protected $fillable = ['genre', 'homepage', 'tmdb_id','imdb_id', 'title', 'overview', 'user_rating', 'poster_path',
        'release_date', 'status', 'tag_line'];

}