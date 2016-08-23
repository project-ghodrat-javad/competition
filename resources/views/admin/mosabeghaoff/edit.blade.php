@extends('Admin')
@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">ویرایش مسابقه {{$model->title}}</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


    {{ Form::model($model,['method'=>'PATCH','files'=>true,'route'=>['admin.mosabegheoff.update',$model->id]]) }}

		<?php
        if($errors->has('title'))
        {
            ?>
            <div class="form-group has-error">
            {!! Form::label('title','عنوان مسابقه',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('title',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'عنوان مسابقه','style'=>'width:600px;']) !!}

            <span class="help-block"><?php echo $errors->first('title'); ?></span>
            </div>
        <?php 
    }
    else
    {?>
        <div class="form-group">
            {!! Form::label('title','عنوان مسابقه') !!}
            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان مسابقه','style'=>'width:600px;']) !!}
        </div>
    <?php } ?>








    <?php
        if($errors->has('question'))
        {
            ?>
            <div class="form-group has-error">
            {!! Form::label('question','پرسش',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('question',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'پرسش خود را درج نمایید','style'=>'width:600px;']) !!}

            <span class="help-block"><?php echo $errors->first('question'); ?></span>
            </div>
        <?php 
    }
    else
    {?>
        <div class="form-group">
            {!! Form::label('question','پرسش') !!}
            {!! Form::text('question',null,['class'=>'form-control','placeholder'=>'پرسش خود را درج نمایید.','style'=>'width:600px;']) !!}
        </div>
    <?php } ?>





    <div>
        {!! Form::label('details','جزئیات') !!}
        {!! Form::textarea('details',null,['class'=>'ckeditor']) !!}
    </div>


    <?php
        if($errors->has('rules'))
        {
            ?>
            <div class="form-group has-error">
            {!! Form::label('rules','قوانین',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::textarea('rules',null,['class'=>'form-control','id'=>'inputError','placeholder="قوانین مسابقه را وارد نمایید."','style'=>'width:600px;']) !!}

            <span class="help-block"><?php echo $errors->first('rules'); ?></span>
            </div>
        <?php 
    }
    else
    {?>
        <div class="form-group">
            {!! Form::label('rules','قوانین') !!}
            {!! Form::textarea('rules',null,['class'=>'form-control','placeholder="قوانین مسابقه را وارد نمایید."','style'=>'width:600px;']) !!}
        </div>
    <?php } ?>

    <div>
        <div class="form-input" style="margin-top:20px;">
            {!! Form::label('img_logo1','تصویر لوگو') !!}
            {!! Form::file('img_logo1',['style'=>'direction:ltr;width:250px;']) !!}
        <div>
        <div style="float:left;margin-left:250px;">
            <img src="<?= asset('resources/upload/logo/'.$model->img_logo) ?>" style="width:50px;height:50px;" title="{{ $model->title }}"/>
        </div>
    </div>

    <div>
        <div class="form-input" style="margin-top:30px;">
            {!! Form::label('img1','تصویر') !!}
            {!! Form::file('img1',['style'=>'direction:ltr;width:250px;']) !!}
        <div>
        <div style="float:left;margin-left:250px;">
            <img src="<?= asset('resources/upload/image/'.$model->img) ?>" style="width:250px;height:150px;" title="{{ $model->title }}"/>
        </div>
    </div>

    <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
        {!! Form::submit('ثبت تغییرات',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
    </div>


	{!! Form::close() !!}


@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>"></script>
@endsection