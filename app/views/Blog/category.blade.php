
@extends('master')
@section('content')


 <script type="text/javascript">

$(function(){

	if ($("img[alt]").width() > 887) {
		$("img[alt]").css('width' ,'100%');
	}

/*    $('img').load(function(){
       var $img = $(this);
       $img.attr('max-width', '887px');
    });*/
});
</script>


                        <div class="title-courselist">
                        	@if(!empty($category))
 								@foreach( $category as $cat )
                            		<h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">{{ $cat->cat_name }}</h1> 
                            	@endforeach
                            @endif
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        
    <div class="col-md-10 col-md-offset-1">
    <div class=" panel-default blog-form">
   <!--  <div class="panel-heading"><h2>最新の投稿</h2></div> -->
    <div class="panel-body" >


		<div class="">
			@foreach( $posts as $post )
			<div class="list-group" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
		<div class="on-hover-blog">	
				<div class="list-group-item" style="background: rgba(255, 255, 255, 0.2);">
					<h3><a class="blog-links" href="{{ URL::to('/blog/'.$post->post_id.'/view') }}">{{ $post->post_title }}</a>
					        <?php 
					        	if (Auth::check()){
		                    		$usr_role = Auth::user()->user_role;
		                    	}else{
		                    		$usr_role = 2;
		                    	}
		                    ?>
							@if($usr_role == 0)
								@if(Auth::id() == $post->author_id)
									<div class="pull-right">
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/deletePost/'.$post->post_id) }}">Delete Post</a>
	                                    &nbsp;&nbsp;&nbsp;&nbsp;
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/editPost/'.$post->post_id) }}">Edit Post</a>
                                    </div>
                                @else
                                	<a style="float: right;" class="button-color-default button-format-default" href="{{ URL::to('/blog/deletePost/'.$post->post_id) }}">Delete Post</a>
                                @endif							
								
							@elseif($usr_role == 1)
								@if(Auth::id() == $post->author_id)
									<div class="pull-right">
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/deletePost/'.$post->post_id) }}">Delete Post</a>
	                                    &nbsp;&nbsp;&nbsp;&nbsp;
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/editPost/'.$post->post_id) }}">Edit Post</a>
                                    </div>
                                @endif
							@endif
					</h3>
					<p>{{ date("M d,Y \a\t h:i a", strtotime($post->created_at))  }} Posted by <strong>{{ $post->username }}</strong></p>
					<!-- $post->created_at->format('M d,Y \a\t h:i a') -->
				</div>
				<div class="list-group-item" style="background: rgba(255, 255, 255, 0.9);">
					<article style="word-break: break-all;">

						{{ str_limit($post->post_body, $limit = 100, $end = '.... ') }}
						<!-- {{ $post->post_body }} -->

					</article>
					<div class="row">
						<div class="col-md-12">
							@if(!$post->commentId)
								<a class="btn btn-link" href="{{ URL::to('/blog/'.$post->post_id.'/view/comment') }}">No Comment</a>
							@endif
							<div class="pull-right">
								<a class="btn btn-link" href="{{ URL::to('/blog/'.$post->post_id.'/view') }}">Read More</a>
							</div>			
						</div>
					</div>
				</div>
		</div>	
			</div>
			@endforeach

			{{$posts->links()}}
		</div>

	</div>
	</div>
	</div>





      
    </div><!-- container -->




@stop