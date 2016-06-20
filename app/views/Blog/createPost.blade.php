
@extends('master')
@section('content')

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>

<script type="text/javascript" src="/contactcomponents/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="/contactcomponents/js/contact_company.js"></script>


<!-- <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script> -->
<script type="text/javascript" src="/tinymce/tinymce.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	//$('[id=body]').css('position','relative');

/*	setTimeout(function(){
	 alert("Hello"); 
	 $('[id=body]').attr('style', 'visibility:hidden; position:absolute;');
	}, 1000);*/
	/**/
});


	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	}); 
</script>




                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">ブログ</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        


        <div class="row">
            <div class="col-md-1">
             
            </div>
            <div class="col-md-10 content-center blog-form">
            	<div class="font-35 text-center">新しいポストを追加</div>
            	<div style="padding: 20px;">
	            	{{Form::open(array('url' => 'blog/addPost/submit', 'name' => 'sentMessage', 'id' => 'contactForm', 'class' => 'form-horizontal', 'novalidate'))}}
						<input type="hidden" name="_token" value="">
						<div class="form-group">
							<input value="" placeholder="ここにタイトルを入力してください" type="text" name="title"class="form-control" />
							<!-- <input type="text" id="name" name="name" class="form-control " placeholder="ここにタイトルを入力してください" style="" required
                       data-validation-required-message="asdasdsad" value=""> -->
                       		<p class="help-block"></p>
						</div>
						<div class="form-group">

							@foreach( $categories as $cat )
								<input name="category[]" type="checkbox" value="{{ $cat->cat_id }}">{{ $cat->cat_name }}</input>&nbsp;
							@endforeach
	
							<p class="help-block"></p>
						</div>
						<div class="form-group">
							<textarea name='body'class="form-control"></textarea>
<!-- 							<textarea id="body" name="body" class="form-control" required
               data-validation-required-message="あなたのメッセージを入力してください" value=""></textarea> -->
               				<p class="help-block"></p>
						</div>

							@if(!empty($statusmessage))
								<div class="control-group">
									<div class="col-md-12">
									 	<div  style="text-align: center;">
									 		@if(!empty($statusmessage))
									 			@if($statussend == '0')
	                                            <div class='alert alert-danger'>
	                                            @else
	                                            <div class='alert alert-success'>
	                                            @endif
                                            @endif
                                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                <strong>{{ $statusmessage }}</strong>
                                            </div>
                                        </div>
									</div>
								</div>
							@endif

						<button id="publish" name="publish" type="submit" value="Send" class="buttonHolder button-color button-format-check">パブリッシュ</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
<!-- 						<button id="save" name="save" type="submit" value="Send" class="buttonHolder button-color button-format-check">下書きを保存</button> -->
					{{Form::close()}}
				</div>


            </div>
        </div>





      
    </div><!-- container -->




@stop