<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicModel extends Model
{
    protected $table='topics';
    public $timestamps =false;
    protected $fillable=['title','matn','file','id_users','count_view','time_creat','emtyaz','state','url'];
}
