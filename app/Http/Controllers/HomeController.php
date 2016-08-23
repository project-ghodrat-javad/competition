<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\MosabegheModel;
use App\DataModel;
use App\PrizeModel;
use App\TopicModel;
use DB;

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
        $mosabeghe=MosabegheModel::where('state',1)->orderBy('id','desc')->get();
        $mosabeghe2=MosabegheModel::orderBy('id','desc')->get();
        return view('index.index',['mosabeghe'=>$mosabeghe,'mosabeghe2'=>$mosabeghe2]);
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
}
