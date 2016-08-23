@extends('layouts.Master_ComDetails')


@section('content')

        
        @include('index.sidbar')

        <div class="description comp-content with-sidebar _panel">
            <header class="info">
                <div class="simple-steps">
                    <a class="info" href="<?= Url('/details/'.$mosabeghe->url); ?>">«جزئیات مسابقه</a>
                    <a class="data" style="color:#000;" href="<?= Url('/details/'.$mosabeghe->url.'/data'); ?>">«  داده ها</a>
                    <a class="submit" href="https://www.kaggle.com/c/draper-satellite-image-chronology/submit">ایجاد یک نطر</a>
                </div>
            </header>
            <div class="comp-content-inside">
                






            <table id="data-files" style="text-align:rtl;direction:rtl;" class="nicetable full roomy align-top border">   
                <thead>
                    <tr>
                        <th colspan="2">عنوان فایل </th> 
                        <th>لینک دانلود</th>         
                    </tr> 
                </thead>

           
                @foreach($data as $data) 
                <tbody>
                    <tr>

                        <td class="file-name" colspan="2" rowspan="1"> {{ $data->title }} </td>
                        <td>
                        <a href="<?= asset('resources/upload/file/'.$data->file); ?>"> {{ $data->file }} </a></td>
                    </tr>

                </tbody>
                @endforeach


            </table>

            </div>
        </div>

@endsection('content')
