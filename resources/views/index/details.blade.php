@extends('layouts.Master_ComDetails')


@section('content')


        @include('index.sidbar')

        <div class="description comp-content with-sidebar _panel">
            <header class="info">
                <div class="simple-steps">
                    <a class="info" style="color:#000;" href="<?= Url('/details/'.$mosabeghe->url); ?>">«جزئیات مسابقه</a>
                    <a class="data" href="<?= Url('/details/'.$mosabeghe->url.'/data'); ?>">«  داده ها</a>
                    <a class="submit" href="https://www.kaggle.com/c/draper-satellite-image-chronology/submit">ایجاد یک نطر</a>
                </div>
            </header>
            <div class="comp-content-inside">
                <h1 style="color: #6f7175">{{ $mosabeghe->question }}</h1>


                <img src="<?= asset('resources/upload/image/'.$mosabeghe->img); ?>" width="632" alt="<?= $mosabeghe->title ?>" title="<?= $mosabeghe->title ?>" /> 
                <span style="margin-top:20px;"></span>
                {!! $mosabeghe->details !!}



            </div>
        </div>

@endsection('content')
