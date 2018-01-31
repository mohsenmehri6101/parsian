<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgModel extends Model
{
    //
    protected $table='img';
    public $timestamps=false;
    protected $fillable = ['name','title','date','role'];
}