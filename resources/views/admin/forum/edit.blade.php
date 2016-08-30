@extends('Admin')
@section('content')

	
    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
        ویرایش موضوع {{ $model2->title }} تالار گفت و گو
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
    <div style="margin-top:50px;" id="box1">

    {{ Form::model($model2,['method'=>'PATCH','route'=>['admin.forum.topic.update',$model2->id]]) }}

		
		<div>

			<?php
				if ( $model2->state == '1') {
				 	?>
				 		{{ Form::label('role','وضعیت فعال / غیر فعال بودن موضوع') }}
						{{ Form::checkbox('role',null,true,['class'=>'checkclick']) }}
				 	<?php
				 }else{?>
				 	{{ Form::label('role','وضعیت فعال / غیر فعال بودن موضوع') }}
					{{ Form::checkbox('role',null,false,['class'=>'checkclick']) }}
				<?php }
			?>
			
		</div>        



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
            {!! Form::textarea('matn',null,['class'=>'ckeditor']) !!}
        </div>


        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت تغییرات ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>

        {!! Form::close() !!}

    </div>


    <p style="font-family:Yekan;padding-right:30px;margin-top:50px;padding-top:20px;padding-bottom:10px;">
        تمامی گفت و گو های انجام شده برای موضوع {{ $model2->title }} 
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
	<div style="margin-top:50px;" id="box2">

		<?php

		use App\lib\GridView2;
		$array1=array('ردیف','متن ','نام کاربر','تاریخ ثبت','تعداد امتیاز','وضعیت','فایل','عملیات');
		$array2=array('-','matn','id_users','date','emtyaz','state','file');
		$GridView=GridView2::view($array1,$array2,$model,$page,$total,$ntable='forum/chat');
		?>
		{!! $model->render() !!}

	</div>    

@endsection

@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>

@endsection

