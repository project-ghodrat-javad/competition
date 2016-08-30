@extends('layouts.users')
@section('content')
 



<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش مسابقاتی که شما در آن ها شرکت نموده اید.</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


  <div style="margin-bottom:50px;margin-top:50px;" id="box4">
        
        {!! Form::open(['url'=>'users/panel/member','files'=>true]) !!}

            <?php
            if($errors->has('titlescript'))
            {
                ?>
                <div class="form-group has-error">
                {!! Form::label('titlescript','عنوان اسکریپت',['class'=>'control-label','for'=>'inputError']) !!}
                {!! Form::text('titlescript',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوان اسکریپت را وارد نمایید."','style'=>'width:600px;']) !!}
                <span class="help-block"><?php echo $errors->first('titlescript'); ?></span>
                </div>
                <?php 
            }
            else
            {?>
                <div class="form-group">
                    {!! Form::label('titlescript','عنوان اسکریپت') !!}
                    {!! Form::text('titlescript',null,['class'=>'form-control','placeholder="عنوان اسکریپت را وارد نمایید."','style'=>'width:600px;']) !!}
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


            <input type="hidden" name="masala_id" value="{{ $model->id }}">

            <div class="form-input" style="margin-top:50px;">
                {!! Form::label('scriptfile','انتخاب فایل') !!}
                {!! Form::file('scriptfile',['style'=>'direction:ltr;width:250px;']) !!}
            </div>

            <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
                {!! Form::submit('ثبت اسکریپت ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
            </div>

        {{ Form::close() }}



        <div style="margin-top:50px;">
            

            <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
                نمایش اسکریپت های ثبت شده برای این مسابقه
            </p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>

            <div style="margin-top:30px;" id="box4-1">
                <?php
                use App\lib\GridView3;
                $array1=array('ردیف','عنوان ','تاریخ','کاربر','زبان برنامه','وضعیت','عملیات');
                $array2=array('-','title','date','id_users','langs_id_langs','state');
                $GridView=GridView3::view($array1,$array2,$model4,$page=1,$total=2,$ntable='panel/member/script');
                ?>
            </div>

        </div>



@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>">
    </script>
@endsection