<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv_Model extends Model
{
    protected $table='cv_';
    public $timestamps=false;
    protected $fillable = ['seen','title','content','date'];
    /*
    title 	content 	seen 	date
   */
}