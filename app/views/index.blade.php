@extends('master')
@section('content')
    

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>


    <script type="text/javascript">

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

    <div class="container" style="margin-top: 50px !important;">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style=" padding-bottom: 100px;">
                            
                    <div class="panel-body">
                        <h1 class="text-center" style="font-size: 45px;">英語 x IT</h1>
                        <h1 class="text-center" style="">世界のどこにいても仕事ができる人へ。</h1>

                        <h4 class="text-center">セブ島IT留学実績No1。</h4>
                        <h4 class="text-center" style="">2013年から上場企業の企業研修、大学提携の海外研修</h4>     
                        <h4 class="text-center">などにご活用頂き、</h4>
                        <h4 class="text-center" style="">2013年から上場企業の企業研修、大学提携の海外研修</h4>      
                        <h4 class="text-center" style="">などにご活用頂き</h4> 
                        <h4 class="text-center" style="">グローバル人材を輩出しています。</h4>    
                        <hr class="smooth-edge-2" />  
                        <h4 class="text-center" style="">下記の事を学べます</h4> 
                        <h2 class="text-center" style="">ブリッジITﾃﾞｨﾚｸﾀ−</h2>
                        <h2 class="text-center" style="">ブリッジSE</h2>
                        <h2 class="text-center" style="">プログラミング</h2>
                        <h2 class="text-center" style="">Photoshop</h2>   
                        <hr class="smooth-edge-2" />  

                            <div class="row">
                                <div class="col-md-6">
                                        <div class="text-center ">
                                        <h4 >日本のIT技術者</h4>  
                                        <h2 style="display: inline;" count-up id="countJapan" end-val="873.4" scroll-spy-event="elementScrolledIntoView" scroll-spy></h2>
                                        人
                                        </div>
                                </div>

    
                                <div class="col-md-6">
                                        <div class="text-center ">
                                        <h4>世界のIT技術者</h4> 
                                        <h2 style="display: inline;" count-up id="countWorld" end-val="873.4" scroll-spy-event="elementScrolledIntoView" scroll-spy></h2>人以上
                                        </div>
                                </div>
             
                            </div>
                        <br>
                        <h5 class="text-center" style="">資料：IPA「グローバル化を支えるIT人材確保・育成施策に関する調査」</h5>   
                        <hr class="smooth-edge-2" />
                        <p class="text-center">ベトナム、フィリピン、マレーシア、インド、バングラデシュ…<br>世界のITエンジニアの人口は今急激に増加しています。</p>
                        <hr class="smooth-edge-2" />
                        <p class="text-center">今後世界で、IT関連企業、<br>IT関連の仕事が増え続ける事は間違いありません。<br>今あなたは何をしますか？</p>
                        <br><br>

                        

                        <div class="hovereffect-zoomout ">
                            <img class="img-responsive img-format-zoomout" src="/img/courses/glyphicons-halflings-white.png" width="100%" class="img-thumbnail" alt="Thumbnail Image">
                            <div class="overlay-zoomout">
                               <h2 class="shadow-h2">初心者向け<br>ブリッジディレクター<br>コース</h2>
                               <a class="info" href="{{ URL::to('/courselist/Gitdirector') }}">もっと見る</a>
                            </div>
                        </div>
                        

                        <div class="hovereffect-slide-right">
                            <img class="img-responsive" src="/img/courses/General_English_Beginners_English_Course_1.jpg" width="100%" class="img-thumbnail" alt="Thumbnail Image">
                                <div class="overlay-slide-right">

                                </div>
                                <div class="overlay-format-slide-right">
                                    <h2 class="shadow-h2">法人様向け<br>ブリッジSE<br>グローバル人材育成<br>コース</h2>
                                    <p> 
                                        <a class="info" href="{{ URL::to('/courselist/Bridgese') }}">もっと見る</a>
                                    </p> 
                                </div>   
                        </div>



                        <div class="hovereffect-zoomin">
                            <img class="img-responsive " src="/img/courses/phpiozym6.jpg" width="100%" class="img-thumbnail" alt="Thumbnail Image">
                                <div class="overlay-zoomin">
                                
                                </div>
                                <div class="overlay-format-zoomin-h2">
                                    <h2>プログラミング<br>コース</h2>
                                </div> 
                                <div class="overlay-format-zoomin-a">
                                    <p> 
                                        <a class="info " href="{{ URL::to('/courselist/Programmer') }}">もっと見る</a>
                                    </p> 
                                </div> 


                        </div>




                        <div class="hovereffect-slide-left">
                            <img class="img-responsive " src="/img/courses/Photoshop-Class-November-16.jpg" width="100%" class="img-thumbnail" alt="Thumbnail Image">
                                <div class="overlay-slide-left">

                                </div>
                                <div class="overlay-format-slide-left">
                                    <h2 class="shadow-h2">Photoshop<br>コース</h2>
                                    <p> 
                                        <a class="info" href="{{ URL::to('/courselist/Designer') }}">もっと見る</a>
                                    </p> 
                                </div>   
                        </div>


                        

                        <div class="hovereffect-slide-line">
                            <img class="img-responsive " src="/img/courses/bigstock-Workteam-in-office-working-on-47168779.jpg" width="100%" class="img-thumbnail" alt="Thumbnail Image">
                                <div class="overlay-slide-line">
                                    <h2 class="shadow-h2">インターン<br>コース</h2>
                                    <p> 
                                        <a class="info" href="{{ URL::to('/courselist/Internship') }}">もっと見る</a>
                                    </p> 
                                </div>
                        </div>



                        
                        <div class="buttonHolder">
                        <br><a style="" class="button-color button-format" href="{{ URL::to('/company-contact') }}">今すぐお問合せ！</a> <br><br><br><br><br><br>
                        </div>
                        

                        <hr class="smooth-edge-2"/>

                        <h4 class="text-center">グローバルITアカデミーでは、IT留学、エンジニア留学でITだけではなく、英語も勉強して頂きます。<br>私たちは世界と戦えるグローバル人材育成に取り組んでいます。</h4>


                    <a href="#" id="back-to-top" title="Back to top"><img class="img-responsive" src="/img/toTop.png" width="100%" class="" alt=""></a>


                    </div> <!-- panel-body -->


      
            </div><!-- col -->

        </div><!-- class row -->
    </div><!-- container -->




@stop