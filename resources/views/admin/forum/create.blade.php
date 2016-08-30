@extends('Admin')
@section('content')

	
    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
        ایجاد موضوع جدید برای تالار گفت و گو
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
    <div style="margin-top:50px;" id="box1">

    {!! Form::open(['url'=>'admin/forum/topic','files'=>true]) !!}

        



	    <?php
	        if($errors->has('title'))
	        {
	            ?>
	            <div class="form-group has-error">
	            {!! Form::label('title','عنوان موضوع',['class'=>'control-label','for'=>'inputError']) !!}
	            {!! Form::text('title',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'عنوان موضوع','style'=>'width:600px;']) !!}

	            <span class="help-block"><?php echo $errors->first('title'); ?></span>
	            </div>
	        <?php 
	    }
	    else
	    {?>
	        <div class="form-group">
	            {!! Form::label('title','عنوان موضوع') !!}
	            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان موضوع','style'=>'width:600px;']) !!}
	        </div>
	    <?php } ?>

 

	    <div>
            {!! Form::label('matn','تشریح موضوع') !!}
            {!! Form::textarea('matn','',['class'=>'ckeditor']) !!}
        </div>


        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت موضوع ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection

@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>

@endsection

