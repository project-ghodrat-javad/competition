<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MosabegheModel;
use Auth;
use App\PrizeModel;
use App\DataModel;
use App\User;
use App\LanguageModel;
use App\ScriptModel;
use App\Http\Requests;

class UserMosabegheController extends Controller
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
        if( Auth::check() )
        {
            $id_user=Auth::user()->id;
            $model=MosabegheModel::where('id_users',$id_user)->orderby('id','desc')->paginate('10');
            return View('user.mosabeghe.index',['model'=>$model]);  
        }
        else{
            return redirect('/login');
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('user.mosabeghe.create');
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
            $Post=new MosabegheModel($request->all());
            $title=str_replace('-','', $Post->title);
            $Post->url=preg_replace('/\s+/','-',$title);
            $Post->date_st=time();
            $Post->state=0;
            $Post->id_users=Auth::user()->id;

            if( $request->know == 'on' )
            {
                $Post->knowlage='yes';
            } 
            else
            {
                $Post->knowlage='no';
            }


            if($request->hasfile('img_logo'))
            {
                $FileName=time().'.'.$request->file('img_logo')->getClientOriginalExtension();

                if($request->file('img_logo')->move('resources/upload/logo',$FileName))
                {
                    $Post->img_logo=$FileName;
                }

            }


            if($request->hasfile('img'))
            {
                $FileName=time().'.'.$request->file('img')->getClientOriginalExtension();

                if($request->file('img')->move('resources/upload/image',$FileName))
                {
                    $Post->img=$FileName;
                }

            }

            if( $Post->save() )
            {

                $priza=new PrizeModel($request->all());
                $priza->id_masale=$Post->id;
                if( $priza->save() )
                {
                    if( $request->hasfile('f1') )
                    {
                        $FileName=time().'f1'.'.'.$request->file('f1')->getClientOriginalExtension();

                        if($request->file('f1')->move('resources/upload/file',$FileName))
                        {
                            $alaki=DataModel::create(['title'=> $request->fil1,'file'=>$FileName,'id_masale'=>$Post->id]);
                        }

                    }

                    if( $request->hasfile('f2') )
                    {
                        $FileName=time().'f2'.'.'.$request->file('f2')->getClientOriginalExtension();

                        if($request->file('f2')->move('resources/upload/file',$FileName))
                        {
                            $alaki=DataModel::create(['title'=> $request->fil2,'file'=>$FileName,'id_masale'=>$Post->id]);
                        }

                    }

                    if( $request->hasfile('f3') )
                    {
                        $FileName=time().'f3'.'.'.$request->file('f3')->getClientOriginalExtension();

                        if($request->file('f3')->move('resources/upload/file',$FileName))
                        {
                            $alaki=DataModel::create(['title'=> $request->fil3,'file'=>$FileName,'id_masale'=>$Post->id]);
                        }

                    }

                    if( $request->hasfile('f4') )
                    {
                        $FileName=time().'f4'.'.'.$request->file('f4')->getClientOriginalExtension();

                        if($request->file('f4')->move('resources/upload/file',$FileName))
                        {
                            $alaki=DataModel::create(['title'=> $request->fil4,'file'=>$FileName,'id_masale'=>$Post->id]);
                        }

                    }

                    if( $request->hasfile('f5') )
                    {
                        $FileName=time().'f5'.'.'.$request->file('f5')->getClientOriginalExtension();

                        if($request->file('f5')->move('resources/upload/file',$FileName))
                        {
                            $alaki=DataModel::create(['title'=> $request->fil5,'file'=>$FileName,'id_masale'=>$Post->id]);
                        }

                    }

                    return redirect('users/panel/mosabeghe'); 
                }  
            }
        }
        else{
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
        $model4=ScriptModel::where(['masale_id_masale'=>$id,'id_users'=>Auth::user()->id])->orderby('id','desc')->get();
        $model2=PrizeModel::where('id_masale',$id)->first();
        $model3=DataModel::where('id_masale',$model->id)->orderby('id','desc')->get();

        if ( $model->state != 1 ) {
            return View('user.mosabeghe.edit',['model'=>$model,'model2'=>$model2,'model3'=>$model3,'lang'=>$lang,'model4'=>$model4]);
        }
        else
        {
            return View('user.mosabeghe.show',['model'=>$model,'model2'=>$model2,'model3'=>$model3,'lang'=>$lang,'model4'=>$model4]);
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
        $Post=MosabegheModel::find($id);
         $title=str_replace('-','', $Post->title);
         $Post->url=preg_replace('/\s+/','-',$title);

        if($request->hasfile('img_logo1'))
        {
            $FileName=time().'.'.$request->file('img_logo1')->getClientOriginalExtension();

            if($request->file('img_logo1')->move('resources/upload/logo',$FileName))
            {
                $Post->img_logo=$FileName;
            }

        }

 
        if($request->hasfile('img1'))
        {
            $FileName=time().'.'.$request->file('img1')->getClientOriginalExtension();

            if($request->file('img1')->move('resources/upload/image',$FileName))
            {
                $Post->img=$FileName;
            }

        }


         if($Post->update($request->all()))
         {
            return redirect('/users/panel/mosabeghe');
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
        $mostate=MosabegheModel::where('id',$id)->first();

        if ( $mostate->state != 1 ) {
            $priza=PrizeModel::where('id_masale',$id)->delete();
            $data=DataModel::where('id_masale',$id)->delete();
            $mosabeghe=MosabegheModel::find($id)->delete();
            return redirect('/users/panel/mosabeghe');
        }
        else
        {
            return redirect('/users/panel/mosabeghe');   
        }
    }


    public function addfile(Request $request)
    {
        $dataf=new DataModel($request->all());
        if( $request->hasfile('f') )
        {
            $FileName=time().'fedit'.'.'.$request->file('f')->getClientOriginalExtension();
            if($request->file('f')->move('resources/upload/file',$FileName))
            {
                $dataf->title=$request->fil;
                $dataf->file=$FileName;
                $dataf->id_masale=$request->id_mo;

                if( $dataf->save() )
                {
                    return redirect('users/panel/mosabeghe/'.$request->id_mo.'/edit');
                }

            }

        }
    }

    public function deletefile($id)
    { 
        $data=DataModel::where('id',$id)->first();
        $delete=DataModel::where('id',$id)->delete();
        return redirect('users/panel/mosabeghe/'.$data->id_masale.'/edit');
    }
}
