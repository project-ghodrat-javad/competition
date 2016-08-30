@extends('layouts.users')
@section('content')
 



<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش مسابقات شما</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>

 
<?php
	use App\lib\GridView3;
	$array1=array('ردیف','عنوان ','پرسش ','زمان شروع','زمان خاتمه','لینک','وضعیت','عملیات');
	$array2=array('-','title','question','date_st','date_finish','url','state');
	$GridView=GridView3::view($array1,$array2,$model,$page=1,$total=10,$ntable='panel/mosabeghe');
?>

{!! $model->render() !!}






@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>
@endsection