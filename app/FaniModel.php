<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaniModel extends Model
{
    protected $table='fani';
    public $timestamps=false;
    protected $fillable = ['seen','title','content','date','img'];
    /*
    title 	content 	seen 	date
   */
}