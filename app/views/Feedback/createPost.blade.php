
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

/*	$('input:radio[name="category"]').click(function() {
		if($('input:radio[name="category"]:checked').val() == '成果物'){
		    $("div.subject-source").css('display' ,'block');
		}else{
			$("div.subject-source").css('display' ,'none');
		}
	});
*/

});





	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	}); 
</script>




                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">体験者の声・成果物</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        


        <div class="row">
            <div class="col-md-1">
             
            </div>
            <div class="col-md-10 content-center blog-form">
            	<div class="font-35 text-center">体験者の声・成果物追加</div>
            	<div style="padding: 20px;">
	            	{{Form::open(array('url' => 'feedback/addPost/submit', 'files' => true, 'name' => 'sentMessage', 'id' => 'contactForm', 'class' => 'form-horizontal', 'novalidate'))}}
						<input type="hidden" name="_token" value="">
						<div class="form-group">
							<input value="" placeholder="ここにタイトルを入力してください" type="text" name="title"class="form-control" />

						</div>
						<div class="form-group">
							<label>THE SUBJECT SOURCE DISPLAY</label>
							<!-- <input value="" placeholder="" type="source_display" name="title"class="form-control" /> -->
							<input type="file" class="" id="source_display" data-input="false" name="source_display" accept="image/*">
						</div>			

						<div class="form-group subject-source">
							<label>INSERT SUBJECT SOURCE</label><br>
							<!-- <input value="" placeholder="" type="text" name="source_source"class="form-control" /> -->
							<textarea name='source_source'class="form-control"></textarea>
	
						</div>

						<div class="form-group">
							<label>SELECT CATEGORY</label><br>
								<input id="category1" type="radio" name="category" value="体験者の声" checked="checked">体験者の声&nbsp;
								<input id="category2" type="radio" name="category" value="成果物">成果物
	
						</div>



						<div class="form-group">
							<label>THE SUBJECT</label>
							<input value="" placeholder="件名ここに入力してください" type="text" name="subject_name"class="form-control" />

						</div>
						<div class="form-group">
							<label>DETAILS</label>
							<textarea name='body_about'class="form-control"></textarea>

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