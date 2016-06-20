
@extends('master')
@section('content')




 <script type="text/javascript">

$(document).ready(function() {



});
</script>


                        <div class="title-courselist">

                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">体験者の声・成果物</h1> 

                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        
    <div class="col-md-12">
	    <div class=" panel-default blog-form">

		    <div class="panel-body" >

		    <div class="row">

		    	@foreach( $feedbacks as $feedback )
			    	<div class="col-sm-3" style="">
				    	<?php 
/*				    		if($feedback->tesart_cat_details == '体験者の声'){
								$source_string = $feedback->tesart_source_dp;

								$search = array('<', '>', '=', '"', '/');
								$replace = array('', '', '', '', '');
								$string_result = str_replace($search, $replace, $source_string);

								$search1 = array('piframe srcwww.youtube.comembed', ' width425 height350iframep');
								$replace1 = array('', '', '', '', '');
								$video_id = str_replace($search1, $replace1, $string_result);
				    		}else{
								$source_string = $feedback->tesart_source_dp;

								$search = array('<p>', '</p>');
								$replace = array('', '');
								$string_result = str_replace($search, $replace, $source_string);
				    		}*/

			            ?>

			    		<article style="">

						<!-- {{ $feedback->tesart_source }} -->

						<div class="hovereffect-feedback">
						<a href="{{ URL::to('/feedback/view/'.$feedback->tesart_id) }}">
							<img class="img-responsive" src="{{URL::to('uploads/')}}/{{$feedback->tesart_source_dp}}" style="height: 256px; width:236px; padding-bottom:20px;"/>
					            <div class="overlay">
					                <h2>{{ $feedback->tesart_title }}</h2>
									<p> 
										<span>{{ $feedback->tesart_cat_details }}</span>
									</p> 
					            </div>
					    </a>
					    </div>
	
					    
						<h4 style="">{{ $feedback->tesart_title }}</h4>

						</article>
										    
			    	</div>

			    @endforeach




		    </div>



			</div>
		</div>
	</div>





      
    </div><!-- container -->




@stop