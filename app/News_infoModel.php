<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News_infoModel extends Model
{
    //
    protected $table='news_info';
    public $timestamps=false;
    protected $fillable = ['seen','title','content','date','role'];

}
