@extends('layouts.users')
@section('content')
 



<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش مسابقاتی که شما در آن ها شرکت نموده اید.</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>

 
<?php
	use App\lib\EditGridView;
	$array1=array('ردیف','عنوان ','پرسش ','زمان شروع','زمان خاتمه','لینک','عملیات');
	$array2=array('-','title','question','date_st','date_finish','url');
	$GridView=EditGridView::view($array1,$array2,$model,$page=1,$total=10,$ntable='panel/member');
?>








@endsection
@section('Footer')
    
@endsection