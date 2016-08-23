<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    protected $table = 'data';
    public $timestamps =false;
    protected $fillable = [ 'title' , 'file','id_masale' ];
}
