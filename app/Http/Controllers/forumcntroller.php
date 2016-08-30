<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopicModel;
use App\Http\Requests;
use App\AnsewerModel;
use Auth;

class forumcntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topic=TopicModel::where('state','1')->orderBy('id','desc')->get();
        return view('forum.forum',['topic'=>$topic]);
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
        $comment=new AnsewerModel($request->all());
        $comment->id_users=1;
        $comment->id_replay=0;
        $comment->state=0;
        $comment->date=time();
        $comment->emtyaz=0;

        if($request->hasfile('file'))
        {
            $FileName=time().'.'.$request->file('file')->getClientOriginalExtension();

            if($request->file('file')->move('resources/upload/file',$FileName))
            {
                $comment->file=$FileName;
            }

        }

        if( $comment->save() )
        {
            return redirect('/showpost/'.$request->url);
        }

        return redirect('/showpost/'.$request->url);
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
}
