<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopicModel;
use App\AnsewerModel;
use App\Http\Requests;
use Auth;

class AdminForumControler extends Controller
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
          return redirect('admin/forum/topic');
        }
        $skip=($page-1)*10;
        $model=TopicModel::orderby('id','desc')->paginate('10');
        $total=TopicModel::count();
        return View('admin.forum.index',['model'=>$model,'page'=>$page,'total'=>$total]);
    }



    public function active($page=1)
    {
        if($page==0)
        {
          return redirect('admin/forum/topic');
        }
        $skip=($page-1)*10;
        $model=TopicModel::where('state',1)->orderby('id','desc')->paginate('10');
        $total=TopicModel::count();
        return View('admin.forum.active',['model'=>$model,'page'=>$page,'total'=>$total]);
    }


    public function unactive($page=1)
    {
        if($page==0)
        {
          return redirect('admin/forum/topic');
        }
        $skip=($page-1)*10;
        $model=TopicModel::where('state',0)->orderby('id','desc')->paginate('10');
        $total=TopicModel::count();
        return View('admin.forum.unactive',['model'=>$model,'page'=>$page,'total'=>$total]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topic=new TopicModel( $request->all() );
        $topic->id_users=Auth::user()->id;
        $topic->count_view=0;
        $topic->time_creat=time();
        $topic->emtyaz=0;
        $topic->state=1;
        $title=str_replace('-','', $topic->title);
        $topic->url=preg_replace('/\s+/','-',$title);

        if ( $topic->save() ) {
            return redirect('admin/forum/topic');
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
    public function edit($id,$page=1)
    {
        if($page==0)
        { 
          return redirect('admin/forum/topic');
        }
        $skip=($page-1)*10;
        $model=AnsewerModel::where('id_topics',$id)->orderby('id','desc')->paginate('10');
        $total=AnsewerModel::count();
        $model2=TopicModel::find($id);
        return View('admin.forum.edit',['model'=>$model,'model2'=>$model2,'page'=>$page,'total'=>$total]);
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
        $topic=TopicModel::find($id);
        $title=str_replace('-','', $topic->title);
        $topic->url=preg_replace('/\s+/','-',$title);

        if( $request->role== 'on' )
        {
            $topic->state=1;
        }
        else
        {
            $topic->state=0;
        }

        if ( $topic->update( $request->all() ) ) {
            return redirect('admin/forum/topic');
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
        $topic=TopicModel::where('id',$id)->delete();
        $ansewer=AnsewerModel::where('id_topics',$id)->delete();
        return redirect('admin/forum/topic');
    }
}
