@extends('layouts.Master_ComDetails')


@section('content')

    <div id="main"> 
        <div id="competition">
 

            <div style="width: 98%; margin-top: 1px;" class="description comp-content with-sidebar _panel"> 
                <header style="height:80px">
                    <div style="width: 25%;float: right;text-align: right">

                        <?php
                            if ( $user->img == '' ) {
                                $img_url=asset('resources/upload/profile/laravel-logo.png');
                            }
                            else{
                                $img_url=asset('resources/upload/profile/'.$user->img);
                            }
                        ?>
                        <img style="border-radius:4px;width:70px;height:70px;padding:20px;" src="{{ $img_url }}">

                        <a href="<?= Url('/showscript/'.$script->url.'/add/like'); ?>"><img style="border-radius:4px;width:70px;height:70px;padding:20px;" alt="Alexander Galea" src="<?= asset('resources/images/icon-thumbs-up.ef2a83d6.png'); ?>"/></a>

                    </div>

                    <div style="width: 75%;float: right;text-align: right;padding-top: 20px"> {{ $user->name }} </div>
                </header>

            </div>


            <div style="width: 98%; margin-top: 1px" class="description comp-content with-sidebar _panel">

                <header style="height:auto;">
                    
                    <table class="table table-default" align="center" style="direction:rtl;border-width:2px;width:60%;float:center;">
                        <tr>
                            <td> ردیف </td>
                            <td> لینک دانلود </td>
                        </tr>

                        <?php $i=1; ?>
                        @foreach($data as $data) 
                        <tr>
                            <td> <?php echo $i; ?> </td> 
                            <td><a href="<?= asset('resources/upload/file/'.$data->name); ?>">{{ $data->name }}</a></td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach

                    </table>

                    <div style="margin-top:60px;direction:rtl;padding:25px;">

                        <div class="panel panel-primary">
                            <div class="panel panel-title" > نوشته ثبت شده برای این اسکریپت </div>
                            <div class="panel-body"> {!! $script->code !!} </div>
                            <div class="panel-footer"> نوشته شده توسط {{ $user->name }} </div>
                        </div>
                        <p>
                            
                        </p>
                    </div>

                </header>
            </div>




        </div>
    </div>


</div>



@endsection