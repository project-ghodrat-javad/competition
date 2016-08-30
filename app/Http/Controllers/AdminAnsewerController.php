<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnsewerModel;
use App\Http\Requests;
use Auth;

class AdminAnsewerController extends Controller
{


    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;

            if( $roule != '1' ){
                return redirect('/users/panel')->send();   
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

        $topic=AnsewerModel::find( $request->id_code );
        $ansewer=new AnsewerModel( $request->all() );
        $ansewer->matn=$request->ans;
        $ansewer->id_users=Auth::user()->id;
        $ansewer->id_replay=$topic->id;
        $ansewer->id_topics=$topic->id_topics;
        $ansewer->state=1;
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
            return redirect('admin/forum/topic/'.$topic->id_topics.'/edit');
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
        $model=AnsewerModel::find($id);
        return View('admin.forum.anseweredit',['model'=>$model]);
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
        $ansewer=AnsewerModel::find($id);
        if( $request->role== 'on' )
        {
            $ansewer->state=1;
        }
        else
        {
            $ansewer->state=0;
        }

        if ( $ansewer->update($request->all()) ) {
            return redirect('admin/forum/topic/'.$ansewer->id_topics.'/edit');
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
        $topic=AnsewerModel::find( $id );
        $delete=AnsewerModel::where('id',$id)->delete();

        return redirect('admin/forum/topic/'.$topic->id_topics.'/edit'); 
    }
}
