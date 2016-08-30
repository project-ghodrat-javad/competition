<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataScriptModel extends Model
{
    protected $table='datascript';
    public $timestamps =false;
    protected $fillable=['name','id_script','url'];
}
