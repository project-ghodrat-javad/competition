<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberModel;
use Auth;
use App\MosabegheModel;
use App\Http\Requests;
use App\LanguageModel;
use App\ScriptModel;

class UserMemberController extends Controller
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
        $member=MemberModel::where('id_user',Auth::user()->id )->get();
        $array=array();
        $i=0;
        foreach ($member as $member) 
        {
            $array[$i]=$member->id_masale;
            $i++;
        }

        $model=MosabegheModel::orderBy('id','desc')->find($array);
        return View('user.member.index',['model'=>$model]);
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
        $script->state=0;

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
            return redirect('users/panel/member/'.$id->id.'/edit');
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
        $model=MosabegheModel::find($id);
        $lang=LanguageModel::orderBy('id_langs','desc')->lists('name','id_langs')->toArray();
        $model4=ScriptModel::where(['id_users'=>Auth::user()->id,'masale_id_masale'=>$id])->orderby('id','desc')->get();

        return View('user.member.edit',['model'=>$model,'lang'=>$lang,'model4'=>$model4]);
        
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
