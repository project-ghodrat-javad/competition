@extends('Admin')
@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش مسابقات فعال</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<?php

use App\lib\GridView2;
$array1=array('ردیف','عنوان ','پرسش ','زمان شروع','زمان خاتمه','لینک','کاربر','عملیات');
$array2=array('-','title','question','date_st','date_finish','url','id_users');
$GridView=GridView2::view($array1,$array2,$model,$page,$total,$ntable='mosabeghe');

?>

{!! $model->render() !!}

@endsection
