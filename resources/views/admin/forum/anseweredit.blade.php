@extends('Admin')
@section('content')

	
    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
        مدیریت سخن انتخاب شده 
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
    <div style="margin-top:50px;" id="box1">

    {{ Form::model($model,['method'=>'PATCH','route'=>['admin.forum.chat.update',$model->id]]) }}

		
		<div>

			<?php
				if ( $model->state == '1') {
				 	?>
				 		{{ Form::label('role','برای این گفته تایید / عدم تایید را انتخاب نمایید') }}
						{{ Form::checkbox('role',null,true,['class'=>'checkclick']) }}
				 	<?php
				 }else{?>
				 	{{ Form::label('role','برای این گفته تایید / عدم تایید را انتخاب نمایید') }}
					{{ Form::checkbox('role',null,false,['class'=>'checkclick']) }}
				<?php }
			?>
			
		</div>        

	    <div>
            {!! Form::label('matn','متن کامل گفته') !!}
            {!! Form::textarea('matn',null,['class'=>'ckeditor']) !!}
        </div>


        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت تغییرات ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>

        {!! Form::close() !!}

    </div>




    <div style="margin-top:50px;margin-bottom:50px;">
	    {{ Form::label('ok','برای نوشتن پاسخی برای این گفته انتخاب کنید') }}
		{{ Form::checkbox('ok',null,false,['class'=>'checkclick','onClick'=>'getcheck()']) }}
	</div>

    <div style="" id="box2">
	    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
	        گفته خود را برای این پاسخ وارد نمایید
	    </p>
	    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>

	    {!! Form::open(['url'=>'admin/forum/chat','files'=>true]) !!}


	    	<div>
	            {!! Form::label('ans','گفته شما') !!}
	            {!! Form::textarea('ans',null,['class'=>'ckeditor']) !!}
        	</div>

        	<div class="form-input" style="margin-top:20px;">
	            {!! Form::label('file','افزودن فایل') !!}
	            {!! Form::file('file',['style'=>'direction:ltr;width:250px;']) !!}
        	</div>

        	<input type="hidden" name="id_code" value="{{ $model->id }}">

	        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
	            {!! Form::submit('ثبت گفته ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
	        </div>

	    {!! Form::close() !!}

    </div>


@endsection

@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>

    <script type="text/javascript">

    	$("#box2").hide();
		function getcheck()
		{
			$(document).ready(function() {
	    		$('.checkclick:checkbox').bind('change', function(e) {
	      			if ($(this).is(':checked')) {
	        			$("#box2").show();
	      			}
	      			else {
	        			$("#box2").hide();
	      			}
	    		})
  			});
		}
	</script>

@endsection