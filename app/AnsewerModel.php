<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnsewerModel extends Model
{
    protected $table='post';
    public $timestamps =false;
    protected $fillable=['matn','id_users','id_replay','id_topics','date','emtyaz','file'];
}
