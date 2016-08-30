<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MosabegheModel;
use App\User;
use Auth;
use App\Http\Requests;

class mosabegheControlleroff extends Controller
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
    public function index($page=1)
    {
        if($page==0)
        {
          return redirect('admin/mosabegheoff');
        }

        $activ=MosabegheModel::where('state',1)->orderBy('id','desc')->get();
        $array2=array(); 
        $j=0; 
        foreach ($activ as $activ) 
        {
            $date='+'.$activ->date_finish.' day';
            $created=strtotime($date, $activ->date_st);
            $datenow=time();
            if ( $created <= $datenow ) {
                $array2[$j]=$activ->id;
                $j++;
            }
        }

        $skip=($page-1)*10;
        $model=MosabegheModel::find($array2);
        $total=MosabegheModel::count();
        return View('admin.mosabeghaoff.index',['model'=>$model,'page'=>$page,'total'=>$total]);

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
        $model=MosabegheModel::find($id);
        return View('admin.mosabeghaoff.edit',['model'=>$model]);
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
         $Post->state=1;

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
            return redirect('/admin/mosabegheoff');
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
        $mosabeghe=MosabegheModel::find($id)->delete();
        return redirect('admin/mosabegheoff');
    }
}
