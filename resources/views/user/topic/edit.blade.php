@extends('layouts.users')
@section('content')
 

	<div style="" id="box2">
	    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
	        برای موضوع  <span style="color:red;"> {!! get_name($model->id_topics); !!}</span>  پاسخی ثبت کنید
	    </p>
	    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>

	    {!! Form::open(['url'=>'users/panel/topic','files'=>true]) !!}


	    	<div>
	            {!! Form::label('ans','گفته شما') !!}
	            {!! Form::textarea('ans',null,['class'=>'ckeditor']) !!}
        	</div>

        	<div class="form-input" style="margin-top:20px;">
	            {!! Form::label('file','افزودن فایل') !!}
	            {!! Form::file('file',['style'=>'direction:ltr;width:250px;']) !!}
        	</div>

        	<input type="hidden" name="id_code" value="{{ $model->id }}">
        	<input type="hidden" name="id_topic" value="{{ $model->id_topics }}">

	        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
	            {!! Form::submit('ثبت گفته ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
	        </div>

	    {!! Form::close() !!}

    </div>

	 

@endsection
<?php 
	use App\TopicModel;

	function get_name($id)
	{
		$title=TopicModel::where('id',$id)->first()['title'];
		return $title;
	}
?>
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>
@endsection