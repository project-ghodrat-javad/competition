@extends('Admin')
@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">ویرایش مسابقه {{$model->title}}</p>
 <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>





<span class="btn btn-danger" onclick="content_box();">ویرایش اطلاعات مسابقه</span>
    <span class="btn btn-success" onclick="setting_box();">ویرایش جوایز مسابقه</span>
    <span class="btn btn-default" onclick="filebox();">مدیریت فایل های مربوط به مسابقه</span>

    <div style="margin-top:50px;" id="box1">

    {!! Form::model($model,['method'=>'PATCH','files'=> true,'route'=>['admin.mosabeghe.update',$model->id]]) !!}

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
            </div>
            <div style="float:left;margin-left:250px;">
                <img src="<?= asset('resources/upload/logo/'.$model->img_logo) ?>" style="width:50px;height:50px;" title="{{ $model->title }}"/>
            </div>
        </div>

        <div>
            <div class="form-input" style="margin-top:30px;">
                {!! Form::label('img1','تصویر') !!}
                {!! Form::file('img1',['style'=>'direction:ltr;width:250px;']) !!}
            </div>
            <div style="float:left;margin-left:250px;">
                <img src="<?= asset('resources/upload/image/'.$model->img) ?>" style="width:250px;height:150px;" title="{{ $model->title }}"/>
            </div>
        </div>

       <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت تغییرات',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>

         {!! Form::close() !!}

    </div>











    <div style="margin-top:50px;" id="box2">

        {!! Form::model($model2,['method'=>'PATCH','route'=>['admin.prize.update',$model2->id]]) !!}

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


        <input type="text" name="id_mo" id="id_mo" value="{{ $model->id }}" hidden="true">

        <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
            {!! Form::submit('ثبت تغییرات جوایز',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
        </div>
        {!! Form::close() !!}

    </div>






    <div style="margin-bottom:50px;" id="box3">


        <div>

            {!! Form::open(['url'=>'admin/add/file','files'=>true]) !!}
                <div class="form-input" style="margin-top:50px;">
                    {!! Form::label('f','انتخاب فایل جدید') !!}
                    {!! Form::file('f',['style'=>'direction:ltr;width:250px;']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fil','عنوانی برای فایل وارد نمایید.',['class'=>'control-label','for'=>'inputError']) !!}
                    {!! Form::text('fil',null,['class'=>'form-control','id'=>'inputError','placeholder="عنوانی برای فایل وارد نمایید."','style'=>'width:600px;']) !!}
                </div> 
                </div>

                <input type="text" name="id_mo" id="id_mo" value="{{ $model->id }}" hidden="true">

                <div class="form-input" style="margin-top:30px;margin-bottom:50px;">
                    {!! Form::submit('ثبت فایل ',['class'=>'btn btn-success','style'=>'margin-right:20px;'])!!}
                </div>

            {{ Form::close() }}


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

    </script>

@endsection
