<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MosabegheModel extends Model
{
    protected $table='masale';
    public $timestamps =false;
    protected $fillable=['title','question','img_logo','date_st','date_finish','state','img','id_users','details','rules','url','knowlage'];

}
