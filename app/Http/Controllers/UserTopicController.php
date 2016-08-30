<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnsewerModel;
use Auth;
use App\Http\Requests;

class UserTopicController extends Controller
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
        if( Auth::check() )
        {
            $ansewer=new AnsewerModel( $request->all() );
            $ansewer->matn=$request->ans;
            $ansewer->id_users=Auth::user()->id;
            $ansewer->id_replay=$request->id_code;
            $ansewer->id_topics=$request->id_topic;
            $ansewer->state=0;
            $ansewer->date=time();
            $ansewer->emtyaz=0;

            if($request->hasfile('file'))
            {
                $FileName=time().'.'.$request->file('file')->getClientOriginalExtension();

                if($request->file('file')->move('resources/upload/file',$FileName))
                {
                    $ansewer->file=$FileName;
                }

            }

            if ( $ansewer->save() ) {
                return redirect('users/panel/forum/'. $ansewer->id_topics .'/edit');
            }


        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if( Auth::check() )
        {
            $model=AnsewerModel::find($id);
            return View('user.topic.edit',['model'=>$model]);

        }
        else
        {
            return redirect('/login');
        }        
       
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
}
