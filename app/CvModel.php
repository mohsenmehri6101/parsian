<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvModel extends Model
{
    protected $table='CV';
    public $timestamps=false;
    protected $fillable = ['title','architect' ,'employer' ,'services', 'year_construction' ,'useri' ,'location',
        'content','seen','img_1','img_2','content','date'];
}
