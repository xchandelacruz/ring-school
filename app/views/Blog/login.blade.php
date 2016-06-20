@extends('master')
@section('content')


<script type="text/javascript" src="/contactcomponents/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="/contactcomponents/js/contact_company.js"></script>

                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">ログイン</h1> 
                        </div>

                    

<div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class=" panel-default blog-form">
						<div class="panel-body">


							<!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}"> -->
							{{Form::open(array('url' => '/blog/logIn/submit', 'name' => 'sentMessage', 'id' => 'contactForm', 'class' => 'form-horizontal', 'novalidate'))}}
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="control-group">
									<label class="col-md-4 control-label">E-Mail Address</label>
									<div class="col-md-8">
										<input type="email" id="email" name="email" class="form-control" placeholder="" style="" required
                       data-validation-required-message="あなたのメールアドレスを入力してください">
                       					<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-8">
										<input type="password" id="password" name="password" class="form-control" placeholder="" style="" required
                       data-validation-required-message="パスワードを入力してください">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="control-group">
									<div class="col-md-7 col-md-offset-4">
										<!-- <button type="submit" class="btn btn-primary">Login</button> -->
										<button id="login" name="login" type="submit" class="buttonHolder button-color button-format-check">ログイン</button>
										<!-- <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a> -->
									</div>
								</div>

								<div class="control-group">
									<br><br><br><br><br><br><br><br><br>
								</div>

								@if(!empty($statusmessage))
								<div class="control-group">
									<div class="col-md-12">
									 	<div  style="text-align: center;">
                                            <div class='alert alert-danger'>
                                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                <strong>{{ $statusmessage }}</strong>
                                            </div>
                                        </div>
									</div>
								</div>
								@endif


							{{Form::close()}}
							<!-- </form> -->


						</div>
					</div>
				</div>
			</div>
		</div>

</div>


@stop