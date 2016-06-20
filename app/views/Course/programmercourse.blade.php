@extends('master')
@section('content')

<link rel="stylesheet" href="/css/hover-min.css">
<link rel="stylesheet" href="/css/hover.css">

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="/js/jquery.classyloader.min.js"></script>

    <script type="text/javascript" src="/animation/bubbles/2-style/raphael-min.js"></script>


<script type="text/javascript" src="/animation/bubbles/2-style/bubble-animation.js"></script>


    <script type="text/javascript">

    var runonce = '';


    //ClassyLoader-3
    $(window).scroll(function() {
        var target = $(".circular-chart").offset().top - 500;

      if ($(document).scrollTop() > target) {
        if(runonce == ''){
            //ClassyLoader-1 
            $('.loader-1').ClassyLoader({
            width: 200, // width of the loader in pixels
            height: 200, // height of the loader in pixels
            animate: true, // whether to animate the loader or not
            displayOnLoad: true,
            percentage: 60, // percent of the value, between 0 and 100
            speed: 30, // miliseconds between animation cycles, lower value is faster
            roundedLine: false, // whether the line is rounded, in pixels
            showRemaining: true, // how the remaining percentage (100% - percentage)
            fontFamily: 'Helvetica', // name of the font for the percentage
            fontSize: '50px', // size of the percentage font, in pixels
            showText: true, // whether to display the percentage text
            diameter: 80, // diameter of the circle, in pixels
            fontColor: 'rgba(25, 25, 25, 0.6)', // color of the font in the center of the loader, any CSS color would work, hex, rgb, rgba, hsl, hsla
            lineColor: 'rgba(55, 55, 55, 1)', // line color of the main circle
            remainingLineColor: 'rgba(55, 55, 55, 0.4)', // line color of the remaining percentage (if showRemaining is true)
            lineWidth: 5 // the width of the circle line in pixels
            });

            //ClassyLoader-2
            $('.loader-2').ClassyLoader({
            width: 200, // width of the loader in pixels
            height: 200, // height of the loader in pixels
            animate: true, // whether to animate the loader or not
            displayOnLoad: true,
            percentage: 70, // percent of the value, between 0 and 100
            speed: 30, // miliseconds between animation cycles, lower value is faster
            roundedLine: false, // whether the line is rounded, in pixels
            showRemaining: true, // how the remaining percentage (100% - percentage)
            fontFamily: 'Helvetica', // name of the font for the percentage
            fontSize: '50px', // size of the percentage font, in pixels
            showText: true, // whether to display the percentage text
            diameter: 80, // diameter of the circle, in pixels
            fontColor: 'rgba(25, 25, 25, 0.6)', // color of the font in the center of the loader, any CSS color would work, hex, rgb, rgba, hsl, hsla
            lineColor: 'rgba(55, 55, 55, 1)', // line color of the main circle
            remainingLineColor: 'rgba(55, 55, 55, 0.4)', // line color of the remaining percentage (if showRemaining is true)
            lineWidth: 5 // the width of the circle line in pixels
            });

            //ClassyLoader-3
            $('.loader-3').ClassyLoader({
            width: 200, // width of the loader in pixels
            height: 200, // height of the loader in pixels
            animate: true, // whether to animate the loader or not
            displayOnLoad: true,
            percentage: 20, // percent of the value, between 0 and 100
            speed: 100, // miliseconds between animation cycles, lower value is faster
            roundedLine: false, // whether the line is rounded, in pixels
            showRemaining: true, // how the remaining percentage (100% - percentage)
            fontFamily: 'Helvetica', // name of the font for the percentage
            fontSize: '50px', // size of the percentage font, in pixels
            showText: true, // whether to display the percentage text
            diameter: 80, // diameter of the circle, in pixels
            fontColor: 'rgba(25, 25, 25, 0.6)', // color of the font in the center of the loader, any CSS color would work, hex, rgb, rgba, hsl, hsla
            lineColor: 'rgba(55, 55, 55, 1)', // line color of the main circle
            remainingLineColor: 'rgba(55, 55, 55, 0.4)', // line color of the remaining percentage (if showRemaining is true)
            lineWidth: 5 // the width of the circle line in pixels
            });
        }
            runonce = '1';
      }
    });


    //countup.js
    $(function() {
        var options = {
          useEasing : true,
          useGrouping : true,
          separator : ',',
          decimal : '.',
          prefix : '',
          suffix : ''
        };
        var counjp = new CountUp("countJapan", 0, 1026147, 0, 2.5, options);
        var counwl = new CountUp("countWorld", 0, 7677599, 0, 2.5, options);

        counjp.start();
        counwl.start();
    });  




   </script>




                
        
                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">③初心者向けプログラミングコース</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        


        <div class="row">
            <div class="col-md-1">
             
            </div>
            <div class="col-md-10 content-center">
            <div class="font-30">英語でプログラミングを学びます（マンツーマン）</div>
            <hr class="smooth-edge-2" />  

<br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> <p style="font-size: 19px; text-indent: 10px;">料金</p>  </div><br><br>
            
                <div><p class="info">１週間　65,000円</p>

<p class="info">※ホテル滞在１人１部屋（提携先ホテル）<br>
※朝食のみ付（近隣にモール、多数レストラン有り、１食200〜300円程度）</p></div>

<br><br><br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> <p style="font-size: 19px; text-indent: 10px;">WEBプログラミを主に習得できます。</p>  </div><br><br>
            
                <div><p class="info">html,css,php,mysl,apacheなどのwebプログラミングを勉強する事ができます。先述の基礎知識の上にwordpress,EC-Cube等のCMSのカスタマイズを学ぶ事ができます。当校のカリキュラムは世界有数のNGO銀行でありノーベル平和賞を受賞した、グラミン銀行との提携プログラム(olivecode)へカリキュラムを提供している実績もあります。ジョブギャランティーに重きをおいたカリキュラムですので、実践レベルのWEBスキルを習得できるカリキュラムとなっています。</p></div>

<br><br><br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> <p style="font-size: 19px; text-indent: 10px;">ついでに英語を勉強できる</p>  </div><br><br>
            
                <div><p class="info">講師は英語を話すフィリピン人です。プログラミングのついでに英語も勉強ください。</p>

<p class="info">何故フィリピン人が英語を話す事ができるか。</p>
<p class="info">それは、学校の授業が英語で行われているからだと思います。</p>
<p class="info">物理、科学、世界史、地理、歴史。</p>
<p class="info">日本ではそれらの授業は日本語で行われます。</p>
<p class="info">しかし、フィリピンでは英語で行われます。</p>
<p class="info">英語を学ぶ為の英語と、何かを学ぶ為の英語は別格だと考えます。</p>
<p class="info">Photoshopを学ぶ為の英語で、英語を効率良く習得頂ければと思います。</p></div>

<br><br>



                <div class="circular-chart row">

                    <div class="col-md-4">
                    <div align="center"><canvas class="loader-1"></canvas></div>
                        
                        <div class="text-center"><p class="info"><h4>難易度</h4>

マンツーマンレッスンですので、個人のレベルに合わせ学ぶ事ができます。</p>
                        </div>      
                    </div>
                    <div class="col-md-4">
                        <div align="center"><canvas class="loader-2"></canvas></div>
                        <div class="text-center"><p class="info"><h4>英語度</h4>

講師はフィリピン人講師となります。日常会話の英語力を保持されている事が好ましいですが、先述のとおり、このコースは英語の勉強としても活用いただけます。</p>
                        </div>      
                    </div>
                    <div class="col-md-4">
                        <div align="center"><canvas class="loader-3"></canvas></div>
                        <div class="text-center"><p class="info"><h4>技術度</h4>マンツーマンレッスンですので個々のスキルに合わせ授業を行う事が可能です。そのため既存技術は必要ありません。 </p>
                        </div>    
                    </div>

                </div>
                <br>
                <img class="img-responsive " src="/img/courses/course-agenda-programmer.png" width="100%" class="img-thumbnail" alt="Thumbnail Image">

                <div class="buttonHolder">
                    <br><a style="" class="button-color button-format" href="{{ URL::to('/company-contact') }}">今すぐお問合せ！</a> <br><br><br><br><br><br>
                </div>

                <div class="font-30">その他のIT留学コース</div>
                    <hr class="smooth-edge-2" />  

                    <dl class="faq col-centered" style="width: 650px;">

                        <a href="{{ URL::to('/courselist/Gitdirector') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">グローバルITディレクターコース　　 　<div class="pull-right">115,000円（１週間）</div></dt></a>
      
                        <a href="{{ URL::to('/courselist/Bridgese') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">ブリッジＳＥコース　　　　　　<div class="pull-right">200,000円（１週間）</div></dt></a>

                        <a href="{{ URL::to('/courselist/Programmer') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">初心者向けプログラミングコース 　 　<div class="pull-right">65,000円（１週間）</div></dt></a>

                        <a href="{{ URL::to('/courselist/Designer') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">初心者向けデザインコース　　　　　 <div class="pull-right">65,000円（１週間）</div></dt></a>

                        <a href="{{ URL::to('/courselist/Internship') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">インターンシップコース 　 　<div class="pull-right">60,000円（１ヶ月）</div></dt></a>
                      
                    </dl>

            </div>
            <div class="col-md-2">
      
            </div>
        </div>






      
    </div><!-- container -->




@stop