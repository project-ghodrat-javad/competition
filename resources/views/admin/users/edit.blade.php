@extends('Admin')
@section('content')


	
    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">ویرایش اطلاعات کاربر</p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


    {!! Form::model($model,['method'=>'PATCH','files'=>true,'route'=>['admin.users.update',$model->id]]) !!}

    <div class="form-input">
        {!! Form::label('name','نام و نام خانوادگی',['style'=>'width:150px;']) !!}
        {!! Form::text('name',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
        <div style="color:red;">
            <?php
            if($errors->has('name'))
            {
                echo $errors->first('name');
            }
            ?>
        </div>
        
    </div>

    <div class="form-input">
        {!! Form::label('email','ایمیل',['style'=>'width:150px;']) !!}
        {!! Form::text('email',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
        <div style="color:red;">
            <?php
            if($errors->has('email'))
            {
                echo $errors->first('email');
            }
            ?>
        </div>
    </div>


    <div class="form-input">
        {!! Form::label('password2','گذرواژه',['style'=>'width:150px;']) !!}
        {!! Form::password('password2',null,['class'=>'inputfiled','style'=>'width:300px;margin-top:20px;']) !!}
    </div>

    <div class="form-input">
        {!! Form::label('roule','انتخاب نقش',['style'=>'width:150px;']) !!}
        {!! Form::select('roule',$roul,null,['style'=>'width:300px;height:25px;margin-right:45px;margin-top:30px;']) !!}
    </div>


    <div class="form-input">
        {!! Form::label('info','توصیفی از خودتون',['style'=>'width:150px;margin-top:20px;']) !!}
        {!! Form::textarea('info',null,['class'=>'inputfiled','style'=>'height:200px;']) !!}
    </div>


    <div class="form-input" style="margin-top:10px;">
        {!! Form::label('img2','انتخاب تصویر پروفایل',['style'=>'width:150px;']) !!}
        {!! Form::file('img2',['style'=>'direction:ltr;width:250px;']) !!}
    <div>


        {!! Form::submit('ثبت ویرایش',['class'=>'btn btn-success','style'=>'margin-right:20px;width:150px;margin-top:50px;'])!!}


    {!! Form::close() !!}



@endsection