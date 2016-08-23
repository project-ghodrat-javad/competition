<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MosabegheModel;
use App\User;
use Auth;
use App\Http\Requests;

class mosabegheControlleroff extends Controller
{
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
        $skip=($page-1)*10;
        $model=MosabegheModel::where('state',0)->orderby('id','desc')->paginate('10');
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
