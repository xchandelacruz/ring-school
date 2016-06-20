
@extends('master')
@section('content')

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>

<script type="text/javascript" src="/contactcomponents/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="/contactcomponents/js/contact_company.js"></script>


 <script type="text/javascript">

$(function(){

	if ($("img[alt]").width() > 887) {
		$("img[alt]").css('width' ,'100%');
	}

	$("iframe").css('width' ,'100%');

/*    $('img').load(function(){
       var $img = $(this);
       $img.attr('max-width', '887px');
    });*/
});

</script>


                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">BLOG</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        
    <div class="col-md-10 col-md-offset-1">
    <div class="panel-default" style="background: rgba(255, 255, 255, -1);">
    <div class="panel-heading" style="background: rgba(255, 255, 255, -1); "><div style="text-align: center;"><h2>

				{{ $posts->post_title }}

    </h2>

		<p>{{ date("M d,Y \a\t h:i a", strtotime($posts->created_at))  }} Posted by <strong>{{ $posts->username }}</strong><strong>@if(!empty($categories))
 in @foreach( $categories as $cat ) / <a href="{{ URL::to('/blog/category/'.$cat->cat_id) }}">{{ $cat->cat_name }}</a> @endforeach @endif</strong></p></div>

    </div>
    <div class="panel-body">



	
			<div class="blog-body" style="word-break: break-all;">
				<hr class="smooth-edge-2" /> 
					{{ $posts->post_body }}
				<hr class="smooth-edge-2" /> 
			</div>	


			<div>
			<br>
				<h2>Leave a comment</h2>
			</div>
			@if(Auth::guest())
				<p>Login to Comment</p>
			@else
				<div class="panel-body">
					 {{Form::open(array('url' => '/blog/' . $posts->post_id. '/comment/submit', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate'))}}
						<input type="hidden" name="_token" value="">
						<input type="hidden" name="on_post" value="{{ $posts->post_id }}">
						<div class="control-group">
							 <textarea id="comment" name="comment" rows="10" class="form-control" style="resize: vertical;" required
               data-validation-required-message="これが必要です" minlength="5" data-validation-minlength-message="ミン5文字" value=""></textarea>
						<p class="help-block"></p>
						</div>
						<button id="post_comment" name="post_comment" type="submit" value="Send" class="buttonHolder button-color button-format-check">Post</button>
					{{Form::close()}}
				</div>
			@endif
			
			<div>
				@if($comments)
				<ul style="list-style: none; padding: 0">
					@foreach($comments as $comment)
						<li class="panel-body">
							<div class="list-group">
								<div class="list-group-item">
									<h3>{{ $comment->username }}</h3>
									<p>{{ date("M d,Y \a\t h:i a", strtotime($comment->created_at)) }}</p>
								</div>
								<div class="list-group-item">
									<p>{{ $comment->comment_body }}</p>
								</div>
							</div>
						</li>
					@endforeach
				</ul>
				@endif
			</div>



	</div>
</div>
</div>


      
    </div><!-- container -->




@stop