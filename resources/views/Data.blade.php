@extends('layouts.Master_ComDetails')

@section('matndetails')

    {{--<h1 style="color: #6f7175">  داده های مسابقات  </h1>--}}

    <div class="col-md-8 col-lg-offset-3" style="border: 2px;margin-top: 50px;">

        <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">داده های مسابقات</p>

        <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


        <?php
        use App\lib\GridView;
        $array1=array('ردیف','نام فایل','فایل ');
        $array2=array('-','title');
        $GridView=GridView::view($array1,$array2,$model,$page,$total,$ntable='datas');
        ?>




    </div>



@endsection