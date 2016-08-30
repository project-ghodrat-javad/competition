<?php
    use App\Http\Controllers\Auth\AuthController;
    use App\MemberModel;
?>
@extends('layouts.Master_ComDetails')
@section('content')

        
        @include('index.sidbar')

        <div class="description comp-content with-sidebar _panel">
            <header class="info">
                <div class="simple-steps">
                    <a class="info" href="<?= Url('/details/'.$mosabeghe->url); ?>">«جزئیات مسابقه</a>
                    <a class="data" href="<?= Url('/details/'.$mosabeghe->url.'/data'); ?>">«  داده ها</a>
                    <a class="submit" href="">ایجاد یک نطر</a>
                </div>
            </header>
            <div class="comp-content-inside">
                






            <table id="data-files" style="text-align:rtl;direction:rtl;" class="nicetable full roomy align-top border">   
                <thead>
                    <tr>
                        <th id="cnt">قوانین شرکت در مسابقه </th>  
                    </tr> 
                </thead>

                <tbody>
                    <tr style="direction:rtl;">
                        <td id="rit">{!! $mosabeghe->rules !!}</td>
                    </tr>

                </tbody>

 
            </table>
            <?php 

                if ( Auth::check() )
                {
                    $id_user = Auth::user()->id;
                    if ( $id_user == $mosabeghe->id_users ) {
                        ?>
                            <span class="btn btn-default" style="color:#000;" ><a href="<?= Url('users/panel/mosabeghe/'.$mosabeghe->id.'/edit'); ?>">این مسابقه توسط خودتان ثبت شده است. (جهت مشاهده و ویرایش کلیک نمایید.)</a></span>
                        <?php
                    }
                    else
                    {
                        $state = MemberModel::where(['id_user'=>$id_user,'id_masale'=>$mosabeghe->id])->first();
                        if ( $state == null ) {

                            $date='+'.$mosabeghe->date_finish.' day';
                            $created=strtotime($date, $mosabeghe->date_st);
                            $datenow=time();
                            if ( $created >= $datenow ) {
                                ?>
                                <span>
                                    <a href="<?= Url('mosabeghe/member/'.$mosabeghe->id) ?>" class="btn btn-success" style="color:#fff;" > قوانین را قبول دارم و در مسابقه شرکت می کنم </a>
                                </span>
                                <?php
                            }
                            else
                            {?>
                                <span class="btn btn-default" style="color:#000;" >مهلت شرکت در این مسابقه به پایان رسیده است.</span>
                            <?php
                            }
                        }

                        else
                        {?>
                           <span class="btn btn-default" style="color:#000;" >شما در این مسابقه شرکت کردید </span>
                        <?php 
                        }
                    }
                }
                else
                {?>
                    <span>
                    <a href="<?= Url('login') ?>" class="btn btn-danger" style="color:#fff;" > برای شرکت در این مسابقه باید وارد حساب کاربری خود شوید.  </a>
                </span>
                <?php 
                }
            ?>
            </div>
        </div>

@endsection('content')
