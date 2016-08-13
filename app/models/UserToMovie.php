<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserToMovie extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Movie2MediaBoxUser';
    protected $fillable = ['user_id', 'movie_id'];

}