@extends('Admin')
@section('content')

    <div class="col-md-8 col-lg-offset-3" style="border: 2px;">

        <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;"> ثبت زبان برنامه نویسی </p>

        <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


        <form action="/language" method="post">
            {{ csrf_field() }}



            <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}"
                 style="padding-left: 80px;padding-right: 20px">

                <div class="col-md-7">
                    <input id="name" placeholder="نام زبان برنامه نویسی را وارد نمایید" type="text" class="form-control"
                           name="name" value="{{ old('name') }}">

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif

                </div>

                <div class="col-md-5">
                    <label for="name" style="padding-top: 10px;width: auto;float: left;margin-right: 40px"
                           class="col-md-4 control-label"> زبان برنامه نویسی</label>
                </div>

            </div>





            <input value="ثبت || ذخیره" type="submit" class="btn btn-success"  style="margin-top: 50px;margin-right: 15px">

        </form>


    </div>





    <div class="col-md-8 col-lg-offset-3" style="border: 2px;margin-top: 50px;">

        <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش زبان های برنامه نویسی</p>

        <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



        <?php
        use App\lib\GridView;
        $array1=array('ردیف','نام زبان برنامه نویسی','عملیات');
        $array2=array('-','name');
        $GridView=GridView::view($array1,$array2,$model,$page,$total,$ntable='language');
        ?>




    </div>
@endsection

@section('Footer')

@endsection