<?php
	use App\lib\Jdf;
	use App\PrizeModel;
?>
@extends('Competitions')


@section('content')


@foreach($mosabeghe as $mosabeghe) 
<li>
                                <div class="front-comp-details">
                                    

                                    <!-- Day   prize   teams  -->
                                    <div class="comp-stats-column-scripts">
                                        <div class="stats stats-ending">
                                            <strong> <?php $Jdf=new Jdf(); echo $Jdf->jdate('Y/n/j-H:i:s',$mosabeghe->date_finish); ?>  </strong>
                                        </div>
                                        <div class="stats stats-teams">
                                            <strong>330</strong>
                                            تیم       </div>
                                        <div class="stats stats-scripts">
                                            <strong>702</strong>
                                            اسکریپت
                                        </div>
                                        <div class="stats stats-prize">
                                            <strong>
                                            	<?php 
                                            		get_prize($mosabeghe->id);
                                            	 ?>
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
                                <a href="<?= Url('/details/'.$mosabeghe->url); ?>"><h4>{{ $mosabeghe2->title }}
	                                <?php 
	                                	if($mosabeghe2->state == 1) 
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
                                    <a href="/c/state-farm-distracted-driver-detection"> {{ $mosabeghe2->question }}</a>
                                </p>
                            </div>
							<a href="/c/state-farm-distracted-driver-detection">
							<img class="competition-image" src="<?= asset('resources/upload/logo/'.$mosabeghe2->img_logo); ?>"" alt="state-farm-distracted-driver-detection Image" height="76" width="76"></a>
                        </td>
                        <td>200 هزار</td>
                        <td>1</td>
                        <td><?php $Jdf=new Jdf(); echo $Jdf->jdate('Y/n/j-H:i:s',$mosabeghe2->date_finish); ?></td>
</tr>
@endforeach
@endsection('content2')


<?php


	function get_prize($id)
	{
    	$prize=PrizeModel::orderBy('id','desc')->get();

    	foreach ($prize as $prize) {
    		# code...
    		$mo=$prize->two;
    	}
    	// $mony=$prize->first+$prize->two+$prize->three;
    	return $mo;
	}

?>