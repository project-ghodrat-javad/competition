@extends('layouts.Master_ComDetails')


@section('content')

        
        @include('index.sidbar')

        <div class="description comp-content with-sidebar _panel">
            <header class="info">
                <div class="simple-steps">
                    <a class="info" href="<?= Url('/details/'.$mosabeghe->url); ?>">«جزئیات مسابقه</a>
                    <a class="data" href="<?= Url('/details/'.$mosabeghe->url.'/data'); ?>">«  داده ها</a>
                    <a class="submit" href="https://www.kaggle.com/c/draper-satellite-image-chronology/submit">ایجاد یک نطر</a>
                </div>
            </header>
            <div class="comp-content-inside">
                






            <table id="data-files" style="text-align:rtl;direction:rtl;" class="nicetable full roomy align-top border">   
                <thead>
                    <tr>
                        <th>جایزه نفر اول </th> 
                        <th>جایزه نفر دوم</th> 
                        <th>جایزه نفر سوم</th>         
                    </tr> 
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $prize->first }}</td>
                        <td>{{ $prize->two }}</td>
                        <td>{{ $prize->three }}</td>
                    </tr>

                </tbody>


            </table>

            </div>
        </div>

@endsection('content')
