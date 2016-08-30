@extends('layouts.users')
@section('content')
 


    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
        ایجاد مسابقه جدید
    </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>

    <span class="btn btn-danger" onclick="content_box();">محتوای مسابقه</span>
    <span class="btn btn-success" onclick="setting_box();">جایزه</span>
    <span class="btn btn-default" onclick="filebox();">فایل ها</span>

    <div style="margin-top:50px;" id="box1">

    {!! Form::open(['url'=>'users/panel/mosabeghe','files'=>true]) !!}

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



        <?php
            if($errors->has('date_finish'))
            {
                ?>
                <div class="form-group has-error">
                {!! Form::label('date_finish','تعداد روز برای فرست پاسخ',['class'=>'control-label','for'=>'inputError']) !!}
                {!! Form::text('date_finish',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'تعداد روز فرصت برای شرکت در مسابقه','style'=>'width:600px;']) !!}

                <span class="help-block"><?php echo $errors->first('date_finish'); ?></span>
                </div>
            <?php 
        }
        else
        {?>
            <div class="form-group">
                {!! Form::label('date_finish','تعداد روز برای فرست پاسخ') !!}
                {!! Form::text('date_finish',null,['class'=>'form-control','placeholder'=>'تعداد روز فرصت برای شرکت در مسابقه','style'=>'width:600px;']) !!}
            </div>
        <?php } ?>
        



        <div>
            {!! Form::label('details','جزئیات') !!}
            {!! Form::textarea('details','',['class'=>'ckeditor']) !!}
        </div>





        <div>
            {!! Form::label('rules','قوانین شرکت در مسابقه را وارد نمایید') !!}
            {!! Form::textarea('rules','',['class'=>'ckeditor']) !!}
        </div>


        <div class="form-input" style="margin-top:20px;">
            {!! Form::label('img_logo','تصویر لوگو') !!}
            {!! Form::file('img_logo',['style'=>'direction:ltr;width:250px;']) !!}
        </div>


        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::label('img','تصویر') !!}
            {!! Form::file('img',['style'=>'direction:ltr;width:250px;']) !!}
        </div>

    </div>

    <div style="margin-top:50px;" id="box2">


 
        {{ Form::label('دانش') }}
        {{ Form::checkbox('know',null,false,['class'=>'checkclick','onClick'=>'getcheck()']) }}


        <div id="ja">
            <?php
            if($errors->has('first'))
            {
                ?>
                <div class="form-group has-error">
                {!! Form::label('first','جایزه نفر اول',['class'=>'control-label','for'=>'inputError']) !!}
                {!! Form::text('first',null,['class'=>'form-control','id'=>'inputError','placeholder="جایزه نفر اول را وارد نمایید."','style'=>'width:600px;']) !!}

                <span class="help-block"><?php echo $errors->first('first'); ?></span>
                </div>
            <?php 
        }
        else
        {?>
            <div class="form-group">
                {!! Form::label('first','جایزه نفر اول') !!}
                {!! Form::text('first',null,['class'=>'form-control','placeholder="جایزه نفر اول را وارد نمایید."','style'=>'width:600px;']) !!}
            </div>
        <?php } ?>



        <?php
            if($errors->has('two'))
            {
                ?>
                <div class="form-group has-error">
                {!! Form::label('two','چایزه نفر دوم',['class'=>'control-label','for'=>'inputError']) !!}
                {!! Form::text('two',null,['class'=>'form-control','id'=>'inputError','placeholder="جایزه نفر دوم را وارد نمایید."','style'=>'width:600px;']) !!}

                <span class="help-block"><?php echo $errors->first('two'); ?></span>
                </div>
            <?php 
        }
        else
        {?>
            <div class="form-group">
                {!! Form::label('two','جایزه نفر دوم') !!}
                {!! Form::text('two',null,['class'=>'form-control','placeholder="جایزه نفر دوم را وارد نمایید."','style'=>'width:600px;']) !!}
            </div>
        <?php } ?>



        <?php
            if($errors->has('three'))
            {
                ?>
                <div class="form-group has-error">
                {!! Form::label('three','جایزه نفر سوم',['class'=>'control-label','for'=>'inputError']) !!}
                {!! Form::text('three',null,['class'=>'form-control','id'=>'inputError','placeholder="جایزه نفر سوم را وارد نمایید."','style'=>'width:600px;']) !!}

                <span class="help-block"><?php echo $errors->first('three'); ?></span>
                </div>
            <?php 
        }
        else
        {?>
            <div class="form-group">
                {!! Form::label('three','جایزه نفر سوم') !!}
                {!! Form::text('three',null,['class'=>'form-control','placeholder="جایزه نفر سوم را وارد نمایید."','style'=>'width:600px;']) !!}
            </div>
        <?php } ?>
        </div>

    </div>


    <div style="margin-bottom:50px;" id="box3">


        <div>
            <div class="form-input" style="margin-top:50px;">
                {!! Form::label('f1','فایل') !!}
                {!! Form::file('f1',['style'=>'direction:ltr;width:250px;']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('fil1','عنوانی برای فایل وارد نمایید.',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('fil1',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوانی برای فایل وارد نمایید."','style'=>'width:600px;']) !!}
            </div> 
        </div>


        <div>
            <div class="form-input" style="margin-top:20px;">
                {!! Form::label('f2','فایل') !!}
                {!! Form::file('f2',['style'=>'direction:ltr;width:250px;']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('fil2','عنوانی برای فایل وارد نمایید.',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('fil2',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوانی برای فایل وارد نمایید."','style'=>'width:600px;']) !!}
            </div> 
        </div>


        <div>
            <div class="form-input" style="margin-top:20px;">
                {!! Form::label('f3','فایل') !!}
                {!! Form::file('f3',['style'=>'direction:ltr;width:250px;']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('fil3','عنوانی برای فایل وارد نمایید.',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('fil3',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوانی برای فایل وارد نمایید."','style'=>'width:600px;']) !!}
            </div> 
        </div>


        <div>
            <div class="form-input" style="margin-top:20px;">
                {!! Form::label('f4','فایل') !!}
                {!! Form::file('f4',['style'=>'direction:ltr;width:250px;']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('fil4','عنوانی برای فایل وارد نمایید.',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('fil4',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوانی برای فایل وارد نمایید."','style'=>'width:600px;']) !!}
            </div> 
        </div>



        <div>
            <div class="form-input" style="margin-top:20px;">
                {!! Form::label('f5','فایل') !!}
                {!! Form::file('f5',['style'=>'direction:ltr;width:250px;']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('fil5','عنوانی برای فایل وارد نمایید.',['class'=>'control-label','for'=>'inputError']) !!}
            {!! Form::text('fil5',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوانی برای فایل وارد نمایید."','style'=>'width:600px;']) !!}
            </div> 
        </div>

        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت مسابقه ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>

        {!! Form::close() !!}

    </div>


@endsection
@section('Footer')
    <script type="text/javascript" src="<?= asset('resources/ckeditor/ckeditor.js') ?>"></script>

    <script type="text/javascript">
        function setting_box()
        {
            $("#box1").hide();
            $("#box3").hide();
            $("#box2").show();
        }
        function content_box()
        {
          $("#box1").show();
          $("#box2").hide();
          $("#box3").hide();
        }

        function filebox()
        {
            $("#box1").hide();
            $("#box2").hide();
            $("#box3").show();
        }

        $("#box1").show();
        $("#box2").hide();
        $("#box3").hide();

        function getcheck()
        {
            $(document).ready(function() {
                $('.checkclick:checkbox').bind('change', function(e) {
                    if ($(this).is(':checked')) {
                        $("#ja").hide();
                    }
                    else {
                        $("#ja").show();
                    }
                })
            });
        }

    </script>
@endsection