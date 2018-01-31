<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //use Notifiable;
    protected $fillable = [
        'password','img','fname','lname','email','details','remember_token','created_at','updated_at'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}