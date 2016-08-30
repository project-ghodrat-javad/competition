<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrizeModel;
use App\Http\Requests;
use Auth;

class UserPrizeController extends Controller
{


    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;

            if( $roule != '0' ){
                return redirect('/admin')->send();   
            }
        }
        else{

            return redirect('login')->send();

        }
          // $this->middleware('auth'); 
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Post=PrizeModel::find($id);
        $Post->id_masale=$request->id_mo;

        if( $request->know2 == 'on' )
        {
            $Post->first='0';
            $Post->two='0';
            $Post->three='0';
        }
        else{
            $Post->first=$request->first;
            $Post->two=$request->two;
            $Post->three=$request->three;
        }

        if($Post->update())
        {
            return redirect('/users/panel/mosabeghe/'.$request->id_mo.'/edit');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
