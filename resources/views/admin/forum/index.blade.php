@extends('Admin')
@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش موضوعات تالار گفت و گو</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>

 
<?php

use App\lib\GridView2;
$array1=array('ردیف','عنوان ','متن ','کاربر ایجاد کننده','تعداد بازدید','تاریخ ثبت','تعداد امتیاز','وضعیت','عملیات');
$array2=array('-','title','matn','id_users','count_view','time_creat','emtyaz','state');
$GridView=GridView2::view($array1,$array2,$model,$page,$total,$ntable='forum/topic');

?>

{!! $model->render() !!}

@endsection
