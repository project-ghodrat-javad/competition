@extends('layouts.Master_ComDetails')


@section('content')


		<div style="background-color:#def6ff;padding:30px;direction:rtl;margin-bottom:50px;">
			<div style="height:30px;">
				<div style="float:right;">
                        <img class="avatar-img" width="50px" height="50px" src="<?= asset('resources/images/site-logo.png'); ?>" alt="Vladimir Iglovikov's image" />                    
                </div>
                <div style="float:right;padding:10px;">
                    hashem
                </div>
			</div>
		</div>

		<div style="background-color:#def6ff;padding:30px;direction:rtl;">

                    {!! Form::open(['url'=>'admin/mosabeghe','files'=>true]) !!}

                    <div>
                     <?php
				        if($errors->has('title'))
				        {
				            ?>
				            <div class="form-group has-error">
				            {!! Form::label('title','عنوان اسکریپت',['class'=>'control-label','for'=>'inputError']) !!}
				            {!! Form::text('title',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'عنوان اسکریپت','style'=>'width:600px;']) !!}

				            <span class="help-block"><?php echo $errors->first('title'); ?></span>
				            </div>
				        <?php 
				    	}
				    	else
				    {?>
				        <div class="form-group">
				            {!! Form::label('title','عنوان اسکریپت') !!}
				            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان اسکریپت','style'=>'width:600px;']) !!}
				        </div>
				    <?php } ?>
				    </div>



				    <div>
			            {!! Form::textarea('details','',['class'=>'ckeditor']) !!}
        			</div>


        			<div class="form-input" style="margin-top:20px;">
		                {!! Form::label('f3','فایل') !!}
		                {!! Form::file('f3',['style'=>'direction:ltr;width:250px;']) !!}
            		</div>


            		<div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            			{!! Form::submit('ثبت اسکریپت ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        			</div>


				    {{ Form::close() }}

              </div>


@endsection

@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>"></script>
@endsection

