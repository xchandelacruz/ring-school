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


    //scroll-spy
    $(window).scroll(function() {


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
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">①グローバルITディレクターコース</h1> 
                        </div>

                    

    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        


        <div class="row">
            <div class="col-md-1">
             
            </div>
            <div class="col-md-10 content-center">
            <div class="font-30">外国人エンジニアに指示してWEBサイトを制作します</div>
            <hr class="smooth-edge-2" />  

<br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> <p style="font-size: 19px; text-indent: 10px;">料金</p>  </div><br><br>
            
                <div><p class="info">１週間　115,000円</p>
<p class="info">※ホテル滞在１人１部屋（提携先ホテル）<br>
※朝食のみ付（近隣にモール、多数レストラン有り、１食200〜300円程度）。</p></div>

<br><br><br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> <p style="font-size: 19px; text-indent: 10px;">グローバル人材になる為の経験を得る事ができます</p>  </div><br><br>
            
                <div><p class="info">自ら設計し、取材したものを、フィリピン人エンジニアに英語で指示を行い、WEBサイトを制作します。ITを通じて海外のスタッフを管理する事を体験する事ができます。</p>

<p class="info">グローバル社会と言われる現代社会、海外の低コストの労働力を如何に活用するか、如何に共存するか、そして、如何に世界へ向けサービスを展開できるかが企業の生き残りの鍵となっています。</p>

<p class="info">英語を活用し指示を出し、管理し、成果を生み出す事ができる人材を世界は欲しています。</p>
<p class="info">そういう人材になる為のきっかけを、このコースで体感頂けます。。</p></div>

<br><br><br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"> <p style="font-size: 19px; text-indent: 10px;">グローバル社会だからこそ、日本人に生まれた強みを生かす</p>  </div><br><br>
            
                <div><p class="info">進捗管理、品質管理は日本人が最も得意とする分野です。
世界の平均レベルでは日本人には遠く及びません。</p>

<p class="info">日本に生まれたからこそできる仕事を、<br>
英語を活用して活躍できる人材になりましょう。</p>

<p class="info">ITの世界もそうですが、色々な業界が衣料産業と同様の道を辿ると考えています。設計は国内、工場は海外。</p>

<p class="info">ITは確実に今そうなっています。</p></div>

<br><br><br><br>
            <div><img class="img-responsive " src="/img/courses/single-red-ribbon.png" width="50px" height="100px" class="img-thumbnail" alt="Thumbnail Image" style="float:left"><p style="font-size: 19px; text-indent: 10px;">一番学んでもらいたい事は、”外国人をマネジメントする事はどういう事か”という事です</p>  </div><br><br>
                <div><p class="info">10年後のあなたはどういう仕事についていますか？</p>

<p class="info">日本人だけで仕事が完結しない社会はすぐそこに来ています。外国人と仕事をする事を、ITを通じて学ぶのがこのコースです。ITができる人にも、ITができない人にも、ITが興味がない人にも、</p>

<p class="info">“外国人と仕事をする事はどういう事か”</p>

<p class="info">“外国人に指示をして仕事をするという事はどういう事か”</p>

<p class="info">という事を学んでもらう為のカリキュラムとコースです。</p>

<p class="info">高校生から社会人まで幅広く受講頂ける”アジアを発見できる”コースとなっております。</p></div>


<br><br>



                <div class="circular-chart row">

                    <div class="col-md-4">
                    <div align="center"><canvas class="loader-1"></canvas></div>
                        
                        <div class="text-center"><p class="info"><h4>難易度</h4>
受講者のレベルに合わせカリキュラムを設定する事が可能ですので、それを加味すると難易度は低いです。高校生から社会人まで幅広い方に受講頂けます。</p>
                        </div>      
                    </div>
                    <div class="col-md-4">
                        <div align="center"><canvas class="loader-2"></canvas></div>
                        <div class="text-center"><p class="info"><h4>英語度</h4>

英語を利用する機会はとても多いです。取材は英語でインタビューを行って頂きますし、エンジニアへの指示も英語で行って頂きます。最終日は英語でプレゼンを行いますので、英語の学習としても活用頂けるカリキュラムです。英語が得意でない方も日本人がケアしますのでご安心して受講頂けます。</p>
                        </div>      
                    </div>
                    <div class="col-md-4">
                        <div align="center"><canvas class="loader-3"></canvas></div>
                        <div class="text-center"><p class="info"><h4>技術度</h4>

　ITの技術は殆ど必要ありません。Facebookができる方であれば受講頂く事ができます。 </p>
                        </div>    
                    </div>

                </div>
                <br>
                <img class="img-responsive " src="/img/courses/course-agenda.png" width="100%" class="img-thumbnail" alt="Thumbnail Image">

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
        </div>






      
    </div><!-- container -->




@stop