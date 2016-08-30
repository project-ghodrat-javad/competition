<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ScriptModel;
use App\LanguageModel;
use App\Http\Requests;
use App\DataScriptModel;

class UserMemberScriptController extends Controller
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
        $model=ScriptModel::where('id',$id)->first();
        if ( $model->state != 1 ) {
            $lang=LanguageModel::orderBy('id_langs','desc')->lists('name','id_langs')->toArray();
            $model2=DataScriptModel::where('id_script',$id)->orderby('id','desc')->get();
            return View('user.member.script',['lang'=>$lang,'model'=>$model,'model2'=>$model2]);   
        }
        else
        {
            return redirect('users/panel/member/'.$model->masale_id_masale.'/edit');
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
        $Post=ScriptModel::find($id);
        $title=str_replace('-','', $request->title);
        $Post->url=preg_replace('/\s+/','-',$title);

        if($Post->update( $request->all() ))
        {
            return redirect('users/panel/member/script/'.$id.'/edit');
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
        $data=ScriptModel::where('id',$id)->first();

        if ( $data->state != 1 ) {
            $delete=ScriptModel::where('id',$id)->delete();
            return redirect('users/panel/member/'.$data->masale_id_masale.'/edit');
        }
        else
        {
            return redirect('users/panel/member/'.$data->masale_id_masale.'/edit');
        }
    }

    public function addfile( Request $request )
    {
        if($request->hasfile('file'))
        {
            $FileName=time().'.'.$request->file('file')->getClientOriginalExtension();

            if($request->file('file')->move('resources/upload/file',$FileName))
            {
                $datas=DataScriptModel::create(['name'=> $FileName,'id_script'=>$request->id_sc]);
            }

        }
        return redirect('users/panel/member/script/'.$request->id_sc.'/edit');
    }

    
    public function deletefile($id)
    {
        $data=DataScriptModel::find($id);
        $delete=DataScriptModel::where('id',$id)->delete();
        return redirect('users/panel/member/script/'.$data->id_script.'/edit');
    }

}
