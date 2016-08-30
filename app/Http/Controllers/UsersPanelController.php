<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Auth;

class UsersPanelController extends Controller
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
        return View('layouts.users');
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
        //
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

    public function editprofile()
    {

        $id = Auth::user()->id;
        $model=User::find($id);
        return View('user.profile.edit',['model'=>$model]);
    }

    public function updateprofile(Request $request)
    {
        $id = Auth::user()->id;
        $user=User::find($id);

        if($request->has('password2'))
        {
            $user->password=bcrypt($request->password2);
        }

        if($request->hasfile('img2'))
        {
            $FileName=time().'.'.$request->file('img2')->getClientOriginalExtension();

            $user->img=$FileName;
            $request->file('img2')->move('resources/upload/profile/',$FileName);

        }

        if( $user->update($request->all()) )
        {
            return redirect('users/panel/edit/profile');
        }
    }
}
