<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\MosabegheModel;
use App\DataModel;
use App\PrizeModel;
use App\TopicModel;
use DB;
use App\User;
use Auth;
use App\AnsewerModel;
use App\ScriptModel;
use App\MemberModel;
use App\DataScriptModel;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin(){

        return 'xdlkxo';

    }


    public function index()
    {
        return view('home');
    } 

    public function competition()
    {
        $prizez=PrizeModel::where('first',0)->get();
        $array=array();
        $i=0;
        foreach ($prizez as $prizez) 
        {
            $ff=MosabegheModel::find($prizez->id_masale);
            if ( $ff->state != 1 ) {   
            }
            else{
                $array[$i]=$prizez->id_masale;
                $i++;
            }
        }

        $activ=MosabegheModel::where('state',1)->get();
        $array2=array();
        $j=0;
        foreach ($activ as $activ) 
        {
            $date='+'.$activ->date_finish.' day';
            $created=strtotime($date, $activ->date_st);
            $datenow=time();
            if ( $created >= $datenow ) {
                $array2[$j]=$activ->id;
                $j++;
            }
        }

        $mosabeghe=MosabegheModel::orderBy('id','desc')->find($array2);
        // $mosabeghe=MosabegheModel::where('state',1)->orderBy('id','desc')->get();
        // $mosabeghe2=MosabegheModel::orderBy('id','desc')->get();
        $mosabeghe2=MosabegheModel::where('state',1)->orderBy('id','desc')->get();
        $mosabeghe3=MosabegheModel::orderBy('id','desc')->find($array);
        return view('index.index',['mosabeghe'=>$mosabeghe,'mosabeghe2'=>$mosabeghe2,'mosabeghe3'=>$mosabeghe3]);
    }

    public function details($url)
    {
        $mosabeghe=MosabegheModel::where('url',$url)->first();
        return View('index.details',['mosabeghe'=>$mosabeghe]);
    }

    public function data($url)
    {
        $mosabeghe=MosabegheModel::where('url',$url)->first();
        $data=DataModel::where('id_masale',$mosabeghe->id)->get();
        return View('index.data',['data'=>$data,'mosabeghe'=>$mosabeghe]);
    }

    public function prize($url)
    {
        $mosabeghe=MosabegheModel::where('url',$url)->first();
        // $prize=DB::table('prize')->where('id_masale',$mosabeghe->id)->get();
        $p=PrizeModel::where('id_masale',$mosabeghe->id)->first();
        return View('index.prize',['prize'=>$p,'mosabeghe'=>$mosabeghe]);
    }

    public function rules($url)
    {
        $mosabeghe=MosabegheModel::where('url',$url)->first();
        return View('index.rules',['mosabeghe'=>$mosabeghe]);
    }

    public function newtopic()
    {
        return View('index.newtopic');
    }

    public function post($url)
    {
        $showpost=TopicModel::where(['url'=>$url,'state'=>1])->first();
        return View('index.showpost',['showpost'=>$showpost]);
    }
 
    public function script($url)
    {
        $mosabeghe=MosabegheModel::where('url',$url)->first();
        return View('index.script',['mosabeghe'=>$mosabeghe]);
    }

    public function showscript($url)
    {
        $mosabeghe=MosabegheModel::where('url',$url)->first();
        $script=ScriptModel::where(['masale_id_masale'=>$mosabeghe->id,'state'=>1])->orderBy('id','desc')->get();
        return View('index.showscript',['mosabeghe'=>$mosabeghe,'script'=>$script]);
    }

    public function searchtopic(Request $request)
    {
        $topic=TopicModel::orderBy('id','desc')->where('title','LIKE','%'.$request->get('search').'%')->get();
        return view('forum.forum',['topic'=>$topic]);
    }

    public function emtyazadd($id)
    {
        $count=AnsewerModel::find($id);
        $mo=$count->emtyaz + 1;
        DB::update('update post set emtyaz=? where id=?',[$mo,$id]);
        $url=TopicModel::where('id',$count->id_topics)->first()['url'];
        return redirect('showpost/'.$url);
    }

    public function like($url)
    {
        $script=ScriptModel::where('url',$url)->first();
        $count=$script->countlike + 1;
        DB::update('update script set countlike=? where id=?',[$count,$script->id]);
        return redirect('script/'.$url.'/show');
    }

    public function member($id)
    {
        $mosabeghe=MosabegheModel::find($id);
        $member=MemberModel::create(['id_user'=>Auth::user()->id,'id_masale'=>$id,'date'=>time()]);
 
        return redirect('rules/'.$mosabeghe->url);
    }

    public function show($url)
    {
        $script=ScriptModel::where('url',$url)->first();
        $mosabeghe=MosabegheModel::find( $script->masale_id_masale );
        $user=User::find( $script->id_users );
        $data=DataScriptModel::where( 'id_script',$script->id )->get();
        return View('index.script',['mosabeghe'=>$mosabeghe,'script'=>$script,'user'=>$user,'data'=>$data]);
    }
}
