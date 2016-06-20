
@extends('master')
@section('content')




 <script type="text/javascript">

$(document).ready(function() {

$("iframe").css('width' ,'100%');

});
</script>


                        <div class="title-courselist">

                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">{{ $feedbacks->tesart_cat_details }}</h1> 

                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">
            
            
    <div class="col-md-12">
	    <div class=" panel-default">

		    <div class="panel-body" >

		    <div class="row">
		    	<div style="text-align: center;">
		    		<h2>{{ $feedbacks->tesart_title }}</h2>
		    			<p>Category: <strong>{{ $feedbacks->tesart_cat_details }}</strong></p>
				</div>
				

			    	<div class="col-sm-12" style="">
						<hr class="smooth-edge-2" />  
			    	</div>

			    	<div class="col-sm-8" style="">
			    		@if($feedbacks->tesart_cat_details == '体験者の声')
				    		{{ $feedbacks->tesart_source }}
				    	@else
				    		<img class="img-responsive" src="{{URL::to('uploads/')}}/{{$feedbacks->tesart_source_dp}}" style="width: 100%; padding-bottom:20px;"/>
				    	@endif
			    	</div>

			    	<div class="col-sm-4" style="">

			    	@if($feedbacks->tesart_cat_details == '体験者の声')
				    	インタビュー<br>
				    	{{ $feedbacks->tesart_subject }}
				    	<br><br>
				    @else	
				    	取材先：<br>
				    	{{ $feedbacks->tesart_subject }}
				    	<br><br>

						成果物URL：
						{{ $feedbacks->tesart_source }}
						<br>
					@endif

				    	DATE<br>
				    	{{ date("M d, Y", strtotime($feedbacks->created_at)) }}
				    	<br><br>
				    	
				    	ABOUT<br>
				    	{{ $feedbacks->tesart_about }}

				    	 
			    	</div>

					<div class="col-sm-12" style="">

					<hr class="smooth-edge-2" />  
					</div>
			  

		    </div>



			</div>
		</div>
	</div>





      
    </div><!-- container -->




@stop