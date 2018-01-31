<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    //
    protected $table='form';
    public $timestamps=false;
    protected $fillable = ['name','email','phone','details','state','date'];
}
