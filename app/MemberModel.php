<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table='member';
    public $timestamps =false;
    protected $fillable=['id_user','id_masale','date'];
}
