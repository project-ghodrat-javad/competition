<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageModel extends Model
{
    protected $table='langs';
    public $timestamps =false;
    protected $fillable=['name'];
}
