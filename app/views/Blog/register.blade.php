@extends('master')
@section('content')

 <script type="text/javascript">

$(function(){
	$("img[a]").css('width' ,'100%');
	//$('img[href$="ABC"]').css('width' ,'100%');

/*    $('img').load(function(){
       var $img = $(this);
       $img.attr('max-width', '887px');
    });*/
});

</script>

<script type="text/javascript" src="/contactcomponents/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="/contactcomponents/js/contact_company.js"></script>

                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">登録</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class=" panel-default blog-form">
						
						
						<div class="panel-body">

							<!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}"> -->
							{{Form::open(array('url' => '/blog/register/submit', 'name' => 'sentMessage', 'id' => 'contactForm', 'class' => 'form-horizontal', 'novalidate'))}}

								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="control-group">
									<label class="col-md-3 control-label">Name</label>
									<div class="col-md-8">
										<!-- <input type="text" class="form-control" name="name" value=""> -->
										<input type="text" id="name" name="name" class="form-control" placeholder="" style="" required
                       data-validation-required-message="あなたの名前を入力してください">
                       					<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<label class="col-md-3 control-label">E-Mail Address</label>
									<div class="col-md-8">
										<!-- <input type="email" class="form-control" name="email" value=""> -->
										<input type="email" id="email" name="email" class="form-control" placeholder="" style="" required
                       data-validation-required-message="あなたのメールアドレスを入力してください">
                       					<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<label class="col-md-3 control-label">Password</label>
									<div class="col-md-8">
										<!-- <input type="password" class="form-control" name="password"> -->
										<input type="password" id="password" name="password" class="form-control" placeholder="" style="" required
                       data-validation-required-message="パスワードを入力してください">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<label class="col-md-3 control-label">Confirm Password</label>
									<div class="col-md-8">
										<!-- <input type="password" class="form-control" name="password_confirmation"> -->
										<input type="password" id="confirm-email" name="confirm-email" class="form-control" name="password_confirmation" placeholder="" style="" required
                       data-validation-required-message="パスワードを入力してください" data-validation-matches-match="password" data-validation-matches-message="パスワードは、上記で入力した一致している必要があります"><br>
                       					<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-5 col-md-offset-3">
										<button id="publish" name="publish" type="submit" class="buttonHolder button-color button-format-check">登録</button>
									</div>
								</div>
							<!-- </form> -->
							{{Form::close()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop