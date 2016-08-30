@extends('Admin')
@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
	نمایش کاربران سایت
</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<?php

	use App\lib\GridView2;
	$array1=array('ردیف','نام','ایمیل','نقش','توصیف','تصویر','عملیات');
	$array2=array('-','name','email','roule','info','img');
	$GridView=GridView2::view($array1,$array2,$model,$page=1,$total=10,$ntable='users');

?>

{!! $model->render() !!}

@endsection
