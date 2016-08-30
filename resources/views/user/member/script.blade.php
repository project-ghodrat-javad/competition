 @extends('layouts.users')
@section('content')
 

	
<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
	ویرایش اسکریپت 
</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



		<div style="margin-top:50px;">
	        {!! Form::model($model,['method'=>'PATCH','files'=> true,'route'=>['users.panel.member.script.update',$model->id]]) !!}

            <?php
            if($errors->has('title'))
            {
                ?>
                <div class="form-group has-error">
                {!! Form::label('title','عنوان اسکریپت',['class'=>'control-label','for'=>'inputError']) !!}
                {!! Form::text('title',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوان اسکریپت را وارد نمایید."','style'=>'width:600px;']) !!}
                <span class="help-block"><?php echo $errors->first('title'); ?></span>
                </div>
                <?php 
            }
            else
            {?>
                <div class="form-group">
                    {!! Form::label('title','عنوان اسکریپت') !!}
                    {!! Form::text('title',null,['class'=>'form-control','placeholder="عنوان اسکریپت را وارد نمایید."','style'=>'width:600px;']) !!}
                </div>
            <?php } ?>



            <div>
                {!! Form::label('code','کد های مربوطه ') !!}
                {!! Form::textarea('code',null,['class'=>'ckeditor']) !!}
            </div>


            <div class="form-input">
                {!! Form::label('langs_id_langs','زبان برنامه نویسی کد های خود را انتخاب نمایید.',['style'=>'width:100px;']) !!}
                {!! Form::select('langs_id_langs',$lang,null,['style'=>'width:300px;height:25px;margin-right:45px;margin-top:30px;']) !!}
            </div>

            <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
                {!! Form::submit('ثبت تغییرات اسکریپت ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
            </div>

        {{ Form::close() }}
	</div>



		<div style="margin-top:50px;margin-bottom:80px;">

		<ul>
			<li> 
			{{ Form::label('know2','افزودن فایل جدید به اسکریپت') }}
            {{ Form::radio('know2',null,false,['class'=>'checkclick','onClick'=>'getcheck2()']) }}

            {{ Form::label('know2','نمایش فایل های موجود برای این اسکریپت') }}
            {{ Form::radio('know2',null,false,['class'=>'checkclick','onClick'=>'getcheck()']) }}
            </li>
        </ul>

            <div style="margin-top:50px;" id="box4-2">

            	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
                	افزودن فایل جدید به این اسکریپت
            	</p>
            	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
            	{!! Form::open(['url'=>'users/panel/member/datascript/add','files'=>true]) !!}
	            	<div class="form-input" style="margin-top:50px;">
		                {!! Form::label('file','انتخاب فایل') !!}
		                {!! Form::file('file',['style'=>'direction:ltr;width:250px;']) !!}
	            	</div>
	            	<input type="hidden" name="id_sc" value="{{ $model->id }}">
	            	<div class="form-input" style="margin-top:30px;margin-bottom:50px;">
			            {!! Form::submit('ثبت فایل',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
			        </div>

            	{!! Form::close() !!}
            </div>

            <div style="margin-top:30px;margin-bottom:50px;" id="box4-1">

            	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
                نمایش داده های ثبت شده برای این اسکریپت
            	</p>
            	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>
                <?php
                use App\lib\GridView;
                $array1=array('ردیف','لینک','عملیات');
                $array2=array('-','name');
                $GridView=GridView::view($array1,$array2,$model2,$page=1,$total=2,$ntable='panel/member/datascript/delete');
                ?>
            </div>

        </div>







@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>"></script>


    <script type="text/javascript">
        $("#box4-1").hide();
        $("#box4-2").hide();

        function getcheck()
        {
            $(document).ready(function() {
                $('.checkclick:radio').bind('change', function(e) {
                    if ($(this).is(':checked')) {
                        $("#box4-1").show();
                        $("#box4-2").hide();
                    }
                    else {
                        $("#box4-1").hide();
                    }
                })
            });
        }

        function getcheck2()
        {
            $(document).ready(function() {
                $('.checkclick:radio').bind('change', function(e) {
                    if ($(this).is(':checked')) {
                        $("#box4-2").show();
                        $("#box4-1").hide();
                    }
                    else {
                        $("#box4-2").hide();
                    }
                })
            });
        }


    </script>

@endsection    