<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentModel extends Model
{
    //
    protected $table='agent';
    public $timestamps=false;
    protected $fillable = ['email','phone_fixed','state','explain','name_company','number_save','number_economy','manage_agent','phone_manage','city_','city','file_name','date'];
}
