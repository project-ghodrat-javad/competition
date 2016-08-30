<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\DataScriptModel;
use App\LanguageModel;
use App\ScriptModel;

class AdminScriptController extends Controller
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
        $script=new ScriptModel( $request->all() );
        $title=str_replace('-','', $request->titlescript);
        $script->url=preg_replace('/\s+/','-',$title);
        $script->title=$request->titlescript;
        $script->date=time();
        $script->id_users=Auth::user()->id;
        $script->masale_id_masale=$request->masala_id;
        $script->countlike=0;
        $script->state=1;

        if ( $script->save() ) {

            $id=ScriptModel::where('url',preg_replace('/\s+/','-',$title))->first();

            if($request->hasfile('scriptfile'))
            {
                $FileName=time().'.'.$request->file('scriptfile')->getClientOriginalExtension();
                if($request->file('scriptfile')->move('resources/upload/file',$FileName))
                {
                    $datas=DataScriptModel::create(['name'=> $FileName,'id_script'=>$id->id]);
                }
            }
            return redirect('admin/mosabeghe/'.$request->masala_id.'/edit');
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
        $lang=LanguageModel::orderBy('id_langs','desc')->lists('name','id_langs')->toArray();
        $model=ScriptModel::where('id',$id)->first();
        $model2=DataScriptModel::where('id_script',$id)->orderby('id','desc')->get();
        return View('admin.script.edit',['lang'=>$lang,'model'=>$model,'model2'=>$model2]);
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


        if( $request->know == 'on' )
        {
            $Post->state='1';
        }
        else{
            $Post->state='0';
        }

        if($Post->update( $request->all() ))
        {
            return redirect('admin/script/'.$id.'/edit');
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

    public function datascript(Request $request)
    {
        if($request->hasfile('file'))
        {
            $FileName=time().'.'.$request->file('file')->getClientOriginalExtension();

            if($request->file('file')->move('resources/upload/file',$FileName))
            {
                $datas=DataScriptModel::create(['name'=> $FileName,'id_script'=>$request->id_sc]);
            }

        }

        return redirect('admin/script/'.$request->id_sc.'/edit');
    }


    public function deletedatascript($id)
    {
        $data=DataScriptModel::find($id);
        $delete=DataScriptModel::where('id',$id)->delete();
        return redirect('admin/script/'.$data->id_script.'/edit');
    }
}
