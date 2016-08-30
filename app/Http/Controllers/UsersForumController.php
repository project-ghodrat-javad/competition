<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AnsewerModel;
use App\TopicModel;
use App\Http\Requests;

class UsersForumController extends Controller
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
        $id=Auth::user()->id;
        $model=TopicModel::where('id_users',$id)->orderby('id','desc')->paginate('10');
        return View('user.talar.index',['model'=>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('user.talar.create');
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
        $topic->state=0;
        $title=str_replace('-','', $topic->title);
        $topic->url=preg_replace('/\s+/','-',$title);

        if ( $topic->save() ) {
            return redirect('users/panel/forum');
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

        if( Auth::check() )
        {
            $test=TopicModel::find($id);
            $id_user=Auth::user()->id;
            if ( $test ) {
                
                if ( $test->id_users != $id_user ) {
                    return redirect('users/panel/forum');
                }
                
                else 
                {
                    $model=AnsewerModel::where(['id_topics'=>$id,'state'=>'1'])->orderby('id','desc')->paginate('10');
                    $model2=TopicModel::find($id);
                    return View('user.talar.edit',['model'=>$model,'model2'=>$model2]);
                }
            }
            else
            {
                return redirect('users/panel/forum');   
            }
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
        if( Auth::check() )
        {
            $test=TopicModel::find($id);
            $id_user=Auth::user()->id;
            if ( $test ) {
                
                if ( $test->id_users != $id_user ) {
                    return redirect('users/panel/forum');
                }
                elseif( $test->state == 1 )
                {
                    return redirect('users/panel/forum');
                }
                else
                {
                    $delete=TopicModel::where('id',$id)->first()->delete();
                    return redirect('users/panel/forum');
                }
            }
            else
            {
                return redirect('users/panel/forum');   
            }
        }
        else
        {
            return redirect('/login');
        }
    }
}
