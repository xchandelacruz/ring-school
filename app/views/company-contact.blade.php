@extends('master')
@section('content')

<link rel="stylesheet" href="/css/hover-min.css">
<link rel="stylesheet" href="/css/hover.css">

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>

<script type="text/javascript" src="/contactcomponents/js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="/contactcomponents/js/contact_company.js"></script>


    <script type="text/javascript">


   </script>


        
                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">会社概要・お問合せ</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        


        <div class="row">
            <div class="col-md-1">
             
            </div>
            <div class="col-md-10 content-center">
                <div class="font-35 text-center">運営会社</div>
                <hr class="smooth-edge" />  

                <div class="row">
                    <div class="col-md-6"><p class="info">
                        <strong>Cebu Asian Gateway School Inc.</strong><br>
                        フィリピン政府認定校<br>
                        TESDA取得校</p>
                    </div>
                    <div class="col-md-6"><p class="info">
                        2F Pelaez BLDG. #78<br>
                        A.S Fortuna St.,<br>
                        Bakilid Mandaue City 6014<br>
                        Philippines</p>
                    </div>
                </div>

                <hr class="smooth-edge" />  

                <div class="font-35 text-center">お問合せ</div>
                 <div><p class="info">カリキュラム、セブの生活に関してなどお気軽にお尋ねください。</p>

                </div>

                <div class="contact-form">
                    <div class="row">
                        <div class="col-md-6" width="100%">


                        </div>
                        <div class="col-md-12" >

                        <!-- <form name="sentMessage" class="" id="contactForm" novalidate> -->
                        @if($Checkmessagestate == '0')
                            {{Form::open(array('url' => 'company-contact/review', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate'))}}
                        @elseif($Checkmessagestate == '1')
                            {{Form::open(array('url' => 'company-contact/submit', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate'))}}
                            <link rel="stylesheet" href="/css/contact-review.css">
                        @endif

                            <div style="padding: 30px;">

                                <div class="control-group">
                                    <label class="control-label"><strong>お名前</strong></label>
                                    @if($Checkmessagestate == '0')
                                    <input type="text" id="name" name="name" class="form-control input-sm" placeholder="" style="width: 280px;" required
                       data-validation-required-message="あなたの名前を入力してください" value="@if($ReturnCheckmessagestate == '1') {{ Session::get('sess_selected_username') }} @endif">
                                    @endif
                                    @if($Checkmessagestate == '1')
                                    <br>
                                    <span name="name">{{ $Username }}</span>
                                    @endif
                                    <p class="help-block"></p>
                                </div>
                                <hr class="smooth-edge-2" style=""/>  
                                <div class="control-group">
                                    <label class="control-label"><strong>メールアドレス</strong></label>
                                    @if($Checkmessagestate == '0')
                                    <input type="email" id="email" name="email" class="form-control input-sm" placeholder="" style="width: 280px;" required
                       data-validation-required-message="あなたのメールアドレスを入力してください" value="@if($ReturnCheckmessagestate == '1') {{ Session::get('sess_selected_email') }} @endif">
                                    @endif
                                    @if($Checkmessagestate == '1')
                                    <br>
                                    <span name="email">{{ $Email }}</span>
                                    @endif
                                    <p class="help-block"></p>
                                </div>
                                <hr class="smooth-edge-2" />    
                                <div class="control-group">
                                    <label class="control-label"><strong>メールアドレス(確認)</strong></label>
                                    @if($Checkmessagestate == '0')
                                    <input type="email" id="confirm-email" name="confirm-email" class="form-control input-sm" name="confirm-email" placeholder="" style="width: 280px;" required
                       data-validation-required-message="電子メールの確認を入力してください" value="@if($ReturnCheckmessagestate == '1') {{ Session::get('sess_selected_emailconfirm') }} @endif" data-validation-matches-match="email" 
  data-validation-matches-message="電子メールアドレスは上記で入力した一致している必要があります"> <br>
                                    @endif
                                    @if($Checkmessagestate == '1')
                                    <br>
                                    <span name="confirm-email">{{ $Confirmemail }}</span>
                                    @endif
                                    <p class="help-block"></p>
                                </div>
                                <hr class="smooth-edge-2" />    
                                <div class="control-group">
                                    <label class="control-label"><strong>お問合せ内容</strong></label>
                                    @if($Checkmessagestate == '0')
                                    <textarea id="message" name="message" rows="10" class="form-control" style="resize: vertical;" required
               data-validation-required-message="あなたのメッセージを入力してください" minlength="5" data-validation-minlength-message="ミン5文字" value="">@if($ReturnCheckmessagestate == '1') {{ Session::get('sess_selected_message') }} @endif</textarea>
                                    @endif
                                    @if($Checkmessagestate == '1')
                                    <br>
                                    <span name="message">{{ $Message }}</span>
                                    @endif
                                    <p class="help-block"></p>
                                </div>
                                <hr class="smooth-edge-2" />  
                            </div>

                            
                                <div  style="text-align: center;">
                                    <!-- <a  class="buttonHolder button-color button-format-check" href="#">確認する</a> -->


                                    @if(!empty($Successmessage))
                                        <div id="success" class=""> 
                                            <div class='alert alert-success'>
                                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                                <strong>{{ $Successmessage }} </strong>
                                            </div>
                                        </div> <!-- For success/fail messages -->
                                    @endif


                                    @if($Checkmessagestate == '0')
                                    <button id="check" name="check" type="submit" value="Send" class="buttonHolder button-color button-format-check">確認する</button>
                                    @endif
                                    @if($Checkmessagestate == '1')
                                    <a style="" class="button-color button-format" href="{{ URL::to('/company-contact/back') }}">戻る</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <button id="submit" name="submit" type="submit" value="Send" class="buttonHolder button-color button-format-check">送信</button>
                                    @endif
                                </div>
          
                        {{Form::close()}}
                        <!-- </form> -->

                        </div>
                    </div>
                <div class="" style="align:center;"><br></div>
                    <!-- <img class="img-responsive " src="/img/BG/paper_background.jpg" width="" height="" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> -->
                </div>


            </div>
        </div>





      
    </div><!-- container -->




@stop