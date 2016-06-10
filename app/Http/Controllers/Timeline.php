<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Timeline extends Controller
{


    public function index()
    {
        return view('Timeline');
    }


}
