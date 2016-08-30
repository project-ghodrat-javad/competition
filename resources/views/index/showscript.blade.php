<?php
	use App\lib\Jdf;
?>
@extends('layouts.Master_ComDetails')

@section('cssha')
	<link rel="stylesheet" href="<?= asset('resources/css/1.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/2.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/3.css'); ?>" id="intercom-styles" type="text/css">

@endsection
	
@section('content')

	<div style="background-color:#def6ff;padding:30px;direction:rtl;margin-bottom:50px;">
		


		<div class="content-box__content-section"> 
	<div class="content-box__subtitle-bar"> 
		<div class="script-list-react__selection-groups"> 
			<div class="selection-group__wrapper"> 
			
			
			
				
				
				
				
				<div class="selection-group__filters"> 
					<div class="script-list-react__filters"> 
					
					
					
						
						
						
						
					</div> 
				</div> 
			</div> 
		</div> 
	</div>

	<div class="script-list-react"> 
		<div> 
			<div> 




				@foreach($script as $script) 
				<div class="block-link"> 
					<a href="<?= Url('/script/'.$script->url.'/show'); ?>" class="block-link__anchor"> 
					</a> 
					<div style="direction:rtl" class="scripts"> 
						<div  class="scripts__item-meta" style="margin-top:10px"> 
							<div class="scripts__item-votes"> 
								<div class="vote-button__container"> 
									<div style="padding-bottom:50px;" class="vote-button vote-button--large vote-button--enabled"> 
										<div> 
											<span class=""> 
												<span> 
												{{ $script->countlike }}
												</span>
											</span> 
										</div> 
										<div class="vote-button__vote-count"> 
											 
										</div> 
									</div> 
								</div> 
							</div> 
							<div class="scripts__item-image-wrapper"> 
								<span data-tooltip="Alexander Galea" class=""> 
									<a style="width: 40px; position: relative; z-index: 2; pointer-events: auto;" class="avatar"> 
										
									</a> 
								</span> 
							</div> 
							
						</div> 
						<!-- react-text: 78 --> 
						<!-- /react-text --> 
						<div class="scripts__item-synopsis" > 
							<div class="scripts__item-info"> 
								<a style="z-index: 2; pointer-events: auto;" href="<?= Url('/script/'.$script->url.'/show'); ?>" class="scripts__item-name"> 
									{{ $script->title }}
								</a> 
								<p class="scripts__item-details"> 
								 
								<span> 
									<?php $Jdf=new Jdf(); echo $Jdf->jdate('Y/n/j-H:i:s',$script->date); ?> 
								</span> <br/>
								<!-- react-text: 85 --> 
								<!-- /react-text --> 
								<span>
									نویسنده: 
								</span>
								<a style="position: relative; z-index: 2; pointer-events: auto;"> 
								
									{!! nameuser($script->id_users); !!}
								</a> 
								</p> 
							</div> 	
							<div class="scripts__item-info-blocks"> 
								<span data-tooltip="This script outputs a notebook" class="tooltip"> 
									<a style="position: relative; z-index: 2; pointer-events: auto;" class="scripts__item-info-block--link"> 
									<span class="fa fa-globe"> 
									</span> 
									</a> 
								</span> 
								<span data-tooltip="This script outputs 45 visualizations" class="tooltip"> 
									<a style="position: relative; z-index: 2; pointer-events: auto;" class="scripts__item-info-block--link"> 
									<span class="fa fa-bar-chart"> 
									</span> 
									</a> 
								</span> 
								<span data-tooltip="This script is written in Python" class="tooltip"> 
									<a style="position: relative; z-index: 2; pointer-events: auto;" class="scripts__item-info-block--link"> 
									Py</a> 
								</span> 
								<span data-tooltip="This script has 6 comments" class="tooltip"> 
									<a style="position: relative; z-index: 2; pointer-events: auto;" href="" class="scripts__item-info-block--comment"> 
										<span> 
											<!-- react-text: 101 --> 
											6<!-- /react-text --> 
											<!-- react-text: 102 --> 
											&nbsp;<!-- /react-text --> 
											<span class="fa fa-comments"> 
											</span> 
										</span> 
									</a> 
								</span> 
							</div> 
						</div> 
						<div style="height:1px;background-color:#000"></div>
						<!-- react-text: 104 --> 
						 <!-- /react-text --> 
					</div> 
				</div> 
				@endforeach
				
				

			</div> 
		</div> 
	</div> 
</div> 



    </div>



@endsection

<?php

	use App\User;
	function nameuser($id)
	{
		$name=User::find($id);
		return $name->name;
	}

?>

@section('Footer')
	<script src="<?= asset('resources/js/4.js'); ?>" async="" type="text/javascript"></script>
@endsection