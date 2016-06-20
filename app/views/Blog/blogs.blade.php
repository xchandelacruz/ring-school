
@extends('master')
@section('content')


 <script type="text/javascript">

$(document).ready(function() {

	if ($("img[alt]").width() > 887) {
		$("img[alt]").css('width' ,'100%');
	}else{
		$("img[alt]").css('width' ,'100%');
	}

/*    $('img').load(function(){
       var $img = $(this);
       $img.attr('max-width', '887px');
    });*/
});
</script>


                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">ブログ</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

    <div class="row">
    <div class="col-md-9 col-md-offset-0">
    <div class=" panel-default blog-form">
   <!--  <div class="panel-heading"><h2>最新の投稿</h2></div> -->
    <div class="panel-body" >

@if ( !$posts->count() )
<!-- There is no post till now. Login and write a new post now!!! -->
@else

			@foreach( $posts as $post )
		
			<div class="list-group " style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
		<div class="on-hover-blog">
				<div class="list-group-item" style="background: rgba(255, 255, 255, 0.5);">
					<h3><a class="blog-links" href="{{ URL::to('/blog/'.$post->post_id.'/view') }}">{{ $post->post_title }}</a>
					        <?php 
					        	if (Auth::check()){
		                    		$usr_role = Auth::user()->user_role;
		                    	}else{
		                    		$usr_role = 2;
		                    	}
		                    ?>
							@if($usr_role == 0)
							<!-- Admin User -->
								@if(Auth::id() == $post->author_id)
									<div class="pull-right">
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/deletePost/'.$post->post_id) }}">Delete Post</a>
	                                    &nbsp;
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/editPost/'.$post->post_id) }}">Edit Post</a>
                                    </div>
                                @else
                                	<a style="float: right;" class="button-color-default button-format-default" href="{{ URL::to('/blog/deletePost/'.$post->post_id) }}">Delete Post</a>
                                @endif							
								
							@elseif($usr_role == 1)
							<!-- Normal User -->
								@if(Auth::id() == $post->author_id)
									<div class="pull-right">
	                                    <a style="" class="button-color-default button-format-default" href="{{ URL::to('/blog/deletePost/'.$post->post_id) }}">Delete Post</a>
	                                    &nbsp;
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

						{{ str_limit($post->post_body, $limit = 100, $end = '....<p></p>') }}
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

			<hr class="smooth-edge-2" /> 

			{{$posts->links()}}


	</div>
	</div>
	</div>


	<div class="col-md-3">
	最近の投稿<br><br>

	@foreach( $recents as $recent )
	<a class="" href="{{ URL::to('/blog/'.$recent->post_id.'/view') }}">{{ $recent->post_title }}</a><br>
	{{ date("M d,Y", strtotime($recent->created_at)) }}
	<br><br>
	@endforeach

	<hr class="smooth-edge-2" /> 


	カテゴリー<br><br>
	@foreach( $categories as $category )
	<a href="{{ URL::to('/blog/category/'.$category->cat_id) }}">{{ $category->cat_name }}</a>
	<br>
	@endforeach
	
	<hr class="smooth-edge-2" /> 
	</div>


	</div>
@endif




      
    </div><!-- container -->




@stop