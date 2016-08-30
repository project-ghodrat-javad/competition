@extends('layouts.users')
@section('content')
 
	
	<?php $state = $model2->state; ?>
    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
        ویرایش موضوع {{ $model2->title }} تالار گفت و گو
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
    <div style="margin-top:50px;" id="box1">

    {{ Form::model($model2,['method'=>'PATCH','route'=>['users.panel.forum.update',$model2->id]]) }}


	    <?php
	        if($errors->has('title'))
	        {
	            ?>
	            <div class="form-group has-error">
	            <?php if ( $state == 1 ) {
	            	?>
	            		{!! Form::label('title','عنوان موضوع',['class'=>'control-label','for'=>'inputError']) !!}
		            	{!! Form::text('title',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'عنوان موضوع','style'=>'width:600px;','readonly'=>true]) !!}
	            	<?php
	            }else{?>
		            {!! Form::label('title','عنوان موضوع',['class'=>'control-label','for'=>'inputError']) !!}
		            {!! Form::text('title',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'عنوان موضوع','style'=>'width:600px;']) !!}
		        <?php } ?>
	            <span class="help-block"><?php echo $errors->first('title'); ?></span>
	            </div>
	        <?php 
	    }
	    else
	    {?>
	        <div class="form-group">
	        	<?php if ( $state == 1 ) {
	            	?>
	            		{!! Form::label('title','عنوان موضوع') !!}
	            		{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان موضوع','style'=>'width:600px;','readonly'=>true]) !!}
	            	<?php
	            }else{?>
		            {!! Form::label('title','عنوان موضوع') !!}
	            	{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان موضوع','style'=>'width:600px;']) !!}
		        <?php } ?>
	        </div>
	    <?php } ?>

 


	    <div>
	    	<?php if ( $state == 1 ) {
	            	?>
	            		{!! Form::label('matn','تشریح موضوع') !!}
            			{!! Form::textarea('matn',null,['class'=>'ckeditor','readonly'=>true]) !!}
	            	<?php
	            }else{?>
		            {!! Form::label('matn','تشریح موضوع') !!}
            		{!! Form::textarea('matn',null,['class'=>'ckeditor']) !!}
		    <?php } ?>
        </div>


        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            <?php if ( $state == 1 ) {
	            }else{?>
		            {!! Form::submit('ثبت تغییرات ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
		    <?php } ?>
        </div>

        {!! Form::close() !!}

    </div>


    <p style="font-family:Yekan;padding-right:30px;margin-top:50px;padding-top:20px;padding-bottom:10px;">
        تمامی گفت و گو های انجام شده برای موضوع {{ $model2->title }} 
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
	<div style="margin-top:50px;" id="box2">

		<?php

		use App\lib\EditGridView;
		$array1=array('ردیف','متن ','نام کاربر','تاریخ ثبت','تعداد امتیاز','وضعیت','فایل','عملیات');
		$array2=array('-','matn','id_users','date','emtyaz','state','file');
		$GridView=EditGridView::view($array1,$array2,$model,$page=1,$total=10,$ntable='panel/topic');
		?>
		{!! $model->render() !!}

	</div>    


@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>
@endsection