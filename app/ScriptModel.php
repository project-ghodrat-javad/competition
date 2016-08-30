<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScriptModel extends Model
{
    protected $table='script';
    public $timestamps =false;
    protected $fillable=['id_script','title','code','date','id_users','masale_id_masale','langs_id_langs','countlike','state'];
}
