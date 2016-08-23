<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrizeModel extends Model
{
    protected $table='prize';
    public $timestamps =false;
    protected $fillable=['first','two','three','id_masale'];
}
