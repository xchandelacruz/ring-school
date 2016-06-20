<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>RSD School</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/web.css">
    <link rel="stylesheet" href="/css/courses.css">
    <link rel="stylesheet" href="/css/feedback.css">
    <link rel="stylesheet" href="/font/Roboto.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<!-- <link rel="stylesheet" href="/animation/bubbles/1-style/animated-bubbles.css"> -->


    <style>
        .centered-form{
            margin-top: 20px;
        }
        .centered-form .panel{
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
        @media print
        {
            .noprint {display:none;}
            .nomargin {margin-top: 0;}
        }
        @page {
         size: A4;
         margin: 2mm 35mm 45mm 35mm; 
        }


    </style>


    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>

 <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/js/bootstrap-filestyle.min.js"> </script>
 <script type="text/javascript" src="/js/moment.min.js"></script>



<script type="text/javascript" src="/countupjs/angular-countUp.min.js"></script>
<script type="text/javascript" src="/countupjs/countUp.min.js"></script>
<script type="text/javascript" src="/countupjs/angular-countUp.js"></script>
<script type="text/javascript" src="/countupjs/countUp.js"></script>




 <script type="text/javascript">

    //scroll-spy



//scroll animation
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});



$(document).ready(function(){

    // hide #back-top first
    $("#back-to-top").hide();



    $("li.dropdown").hover(function(){
        //alert('asdasd');
            // Add slideDown animation to dropdown

            $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
   
        }, function(){
           // alert('xx');
            // Add slideUp animation to dropdown

            $(this).find('.dropdown-menu').first().stop(true, true).slideUp();

    });



});




    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // scroll body to 0px on click
/*        $('#back-to-top a').click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });*/

        $('#back-to-top a').each(function(){
            $(this).click(function(){ 
            $('html,body').animate({ scrollTop: 0 }, 'slow');
            return false; 
        });
});




    });

</script>

</head>
<body style="" ng-app="ringApp">
<!--     <nav class="headbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                    <img src="/img/rsdlogo.png" width="100px" height="100px" class="img-circle">
            </div>
                
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">ホーム</a></li>
                <li><a href="">コース、料金一覧</a></li>
                <li><a href="">体験者の声・成果物</a></li>
                <li><a href="">ブログ</a></li>
                <li><a href="">会社概要・お問合せ</a></li>
            </ul>
            </div>
        </div>
    </nav> -->


<nav class="headbar navbar-default navbar-fixed-top" style="box-shadow: 0px 0px 30px #888888;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/home"><img src="/img/ring-school-og.png" class="navbar-logo" class=""/></a>
    </div>
    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav pull-right">


        <li><a class="active" href="/home">ホーム</a></li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="" href="{{ URL::to('/courselist') }}">コース、料金一覧</a>
            <ul class="dropdown-menu" >
                <li><a href="{{ URL::to('/courselist/Gitdirector') }}">①グローバルITディレクターコース</a></li>
                <li><a href="{{ URL::to('/courselist/Bridgese') }}">②ブリッジSEコース</a></li>
                <li><a href="{{ URL::to('/courselist/Programmer') }}">③初心者向けプログラミングコース</a></li>
                <li><a href="{{ URL::to('/courselist/Designer') }}">④初心者向けデザインコース</a></li>
                <li><a href="{{ URL::to('/courselist/Internship') }}">⑤インターンシップコース</a></li>
            </ul>
        </li>

        <!-- <li><a href="#">体験者の声・成果物</a></li> -->
        <li class="dropdown"><a href="{{ URL::to('/feedback') }}">体験者の声・成果物</a>
                <?php 
                    if (Auth::check()){
                        $usr_role = Auth::user()->user_role;
                    }else{
                        $usr_role = 2;
                    }
                ?>
                @if($usr_role == 0)
                <!-- Admin User -->
                    <ul class="dropdown-menu" >
                            <li><a href="{{ URL::to('/feedback/addPost') }}">体験者の声・成果物追加</a></li>
                    </ul> 
                @endif
        <li class="dropdown"><a href="{{ URL::to('/blog') }}">ブログ</a>
            <ul class="dropdown-menu" >
                @if(Auth::check())
                    <li><a href="{{ URL::to('/blog/addPost') }}">新しい投稿を追加</a></li>
<!--                     <li><a href="{{ URL::to('/blog/mypost') }}">私のポスト</a></li>
                    <li><a href="{{ URL::to('/blog/myprofile') }}">私のプロフィール</a></li> -->
                    <li><a href="{{ URL::to('/logout') }}">ログアウト</a></li>
                @else
                    <li><a href="{{ URL::to('/blog/logIn') }}">ログイン</a></li>
                    <li><a href="{{ URL::to('/blog/register') }}">登録</a></li>
                @endif
            </ul> 
        </li>

        <li><a href="{{ URL::to('/company-contact') }}">会社概要・お問合せ</a></li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>


<!--  <div id="canvas" style="position: absolute; left: 1000px; top: 100px; z-index: -1;">   </div> -->
        @yield('content')



    <!-- footer -->

    <div id="footer" class="navbar-inverse footbar-bar" role="" style=" box-shadow: 0px 0px 30px #888888;">
        <div class="container" style="padding-top: 40px;">
            <div class="row">
                <div class="col-xs-4">
                        <ul class="list-unstyled">
                            <li>運営会社<li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a style="text-decoration: none;">Cebu Asian Gateway School Inc.<br><br>
                             2F Pelaez BLDG. #78
                             A.S Fortuna St.,
                             Bakilid Mandaue City 6014
                             Philippines</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a style="text-decoration: none;">フィリピン政府認定校<br>
                            TESDA取得校</a></li>
                        </ul>
                </div>
                <div class="col-xs-4">
                        <ul class="list-unstyled">
                            <li>サイトマップ<li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="/">ホーム</a></li>
                            <li><a href="{{ URL::to('/courselist') }}">コース、料金一覧 </a></li>
                            <li><a href="{{ URL::to('/courselist/Gitdirector') }}">①グローバルITディレクターコース</a></li>
                            <li><a href="{{ URL::to('/courselist/Bridgese') }}">②ブリッジSEコース</a></li>
                            <li><a href="{{ URL::to('/courselist/Programmer') }}">③初心者向けプログラミングコース</a></li>
                            <li><a href="{{ URL::to('/courselist/Designer') }}">④初心者向けデザインコース</a></li>
                            <li><a href="{{ URL::to('/courselist/Internship') }}">⑤インターンシップコース</a></li>
                            <li><a href="#">体験者の声・成果物</a></li>
                            <li><a href="#">ブログ</a></li>
                            <li><a href="{{ URL::to('/company-contact') }}">会社概要・お問合せ</a></li>
                        </ul>
                </div>
                <div class="col-xs-4">
                        <ul class="list-unstyled">
                            <li>最近の投稿<li>
                            <li><a href="#">&nbsp;</a></li>
                            <?php
                                $recentPosts = DB::table('posts')->orderBy('created_at', 'desc')->take(5)->get();
                            ?>
                            @foreach( $recentPosts as $recpost )
                                <li><a href="{{ URL::to('/blog/'.$recpost->post_id.'/view') }}">{{ $recpost->post_title }}</a></li>

                            @endforeach
                        </ul>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-xs-8">
                        <ul class="list-unstyled list-inline pull-left">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                </div>
                <div class="col-xs-4">
                        <p class="text-muted pull-right">© 2015 xCHAN Inc. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>






</body>







</html>