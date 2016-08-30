<?php
	use App\lib\Jdf;
	use App\PrizeModel;
    use App\DataScriptModel;
?>
@extends('Competitions')


@section('content')


@foreach($mosabeghe as $mosabeghe) 
<li>
                                <div class="front-comp-details">
                                    

                                    <!-- Day   prize   teams  -->
                                    <div class="comp-stats-column-scripts">
                                        <div class="stats stats-ending">
                                            <strong> 
                                                <?php 
                                                $count=$mosabeghe->date_finish;
                                                $date='+'.$count.' day';
                                                $Jdf=new Jdf(); 
                                                echo $Jdf->jdate('Y/n/j-H:i:s',strtotime($date, $mosabeghe->date_st)); 
                                                ?>  
                                            </strong>
                                        </div>
                                        
                                        <div class="stats stats-scripts">
                                            <strong>{!! get_count($mosabeghe->id) !!}</strong>
                                            اسکریپت
                                        </div>
                                        <div class="stats stats-prize">
                                            <strong>
                                            	{!! get_prize($mosabeghe->id); !!}  
                                            </strong>
                                        </div>
                                    </div>
                                    <!--table title -->
                                    <div class="comp-desc-column" style="width: 60%; float: left;">
                                        <h3>
                                            <a class="comp-link" href="<?= Url('/details/'.$mosabeghe->url); ?>">{{ $mosabeghe->title }}</a>
                                        </h3>
                                        <div class="job-desc">
                                            <div class="job-title">
                                                {{ $mosabeghe->question }}
                                            </div>
                                          <!--  <div class="job-employer">Facebook</div>
                                            <div class="job-location">Menlo Park, CA or Seattle, WA</div>-->
                                        </div>
                                    </div>
                                    <img class="front-current-image" src="<?= asset('resources/upload/logo/'.$mosabeghe->img_logo); ?>" alt="Facebook V: Predicting Check Ins" title="Facebook V: Predicting Check Ins" height="76" width="76">

                                </div>
								<!-- img  -->
								<div class="My" style="background:red;">
                                </div>
								
                            </li>

@endforeach
@endsection('content')


@section('content2')
@foreach($mosabeghe2 as $mosabeghe2) 
<tr class="active-comp">
                        <td style="border-left: 1px solid rgb(224, 224, 224);">
                            
                            <div class="competition-details">
                                <div class="competitions-types"></div>
                                <a href="<?= Url('/details/'.$mosabeghe2->url); ?>"><h4>{{ $mosabeghe2->title }}
                                    <?php 
                                        $day=$mosabeghe2->date_finish;
                                        $datef=strtotime('+'.$day.' day',$mosabeghe2->date_st);
                                        $timenow=time();
                                        if( $datef >= $timenow ) 
                                        {
                                    ?>
                                    <span style="color:green;">(فعال)</span>
                                    <?php
                                    }
                                    else{
                                    ?>
                                    <span style="color:red;">(غیر فعال)</span>
                                    <?php
                                    }
                                    ?>
                                </h4></a>
                                <p class="competition-summary">
                                    <a href="<?= Url('/details/'.$mosabeghe2->url); ?>"> {{ $mosabeghe2->question }}</a>
                                </p>
                            </div>
                            <a href="<?= Url('/details/'.$mosabeghe2->url); ?>">
                            <img class="competition-image" src="<?= asset('resources/upload/logo/'.$mosabeghe2->img_logo); ?>"" alt="{{$mosabeghe2->url}}" height="76" width="76"></a>
                        </td>
                        <td>{!! get_prize($mosabeghe2->id); !!} </td>
                        <td><?php 
                                                $count=$mosabeghe2->date_finish;
                                                $date='+'.$count.' day';
                                                $Jdf=new Jdf(); 
                                                echo $Jdf->jdate('Y/n/j-H:i:s',strtotime($date, $mosabeghe2->date_st)); 
                                                ?>  </td>
</tr>
@endforeach
@endsection('content2')



@section('content3')
@foreach($mosabeghe3 as $mosabeghe3) 
<tr class="active-comp">
                        <td style="border-left: 1px solid rgb(224, 224, 224);">
                            
                            <div class="competition-details">
                                <div class="competitions-types"></div>
                                <a href="<?= Url('/details/'.$mosabeghe3->url); ?>"><h4>{{ $mosabeghe3->title }}
                                    <?php 
                                        if($mosabeghe3->state == 1) 
                                        {
                                    ?>
                                    <span style="color:green;">(فعال)</span>
                                    <?php
                                    }
                                    else{
                                    ?>
                                    <span style="color:red;">(غیر فعال)</span>
                                    <?php
                                    }
                                    ?>
                                </h4></a>
                                <p class="competition-summary">
                                    <a href="<?= Url('/details/'.$mosabeghe3->url); ?>"> {{ $mosabeghe3->question }}</a>
                                </p>
                            </div>
                            <a href="<?= Url('/details/'.$mosabeghe3->url); ?>">
                            <img class="competition-image" src="<?= asset('resources/upload/logo/'.$mosabeghe3->img_logo); ?>" alt="{{$mosabeghe3->url}}" height="76" width="76"></a>
                        </td>
                        <td>{!! get_prize($mosabeghe3->id); !!} </td>
                        <td><?php 
                            $count=$mosabeghe3->date_finish;
                            $date='+'.$count.' day';
                            $dateend=strtotime($date, $mosabeghe3->date_st);
                            $Jdf=new Jdf(); 
                            echo $Jdf->jdate('Y/n/j-H:i:s',$dateend); 
                            ?>  </td>
</tr>
@endforeach
@endsection('content3')

@section('Footer')
<script type="text/javascript">

    $("#box2").show();
    $("#box3").hide();
    function hami()
        {
            $(document).ready(function() {
                $('.checkclick:checkbox').bind('change', function(e) {
                    if ($(this).is(':checked')) {
                        $("#box2").hide();
                        $("#box3").show();
                    }
                    else {
                        $("#box3").hide();
                        $("#box2").show();
                    }
                })
            });
        }
</script>
@endsection


<?php


    function get_count($id)
    {
        $count=DataScriptModel::where('id_script',$id)->count();
        return $count;
    }
	function get_prize($id)
	{
    	$prize=PrizeModel::where('id_masale',$id)->first();

        if ( $prize->first != 0 ) {
            $p=$prize->first+$prize->two+$prize->three;
            return $p.' ریال';
        }else{
            return 'علمی';
        } 
	}

?>