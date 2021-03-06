@extends('master')
@section('content')

<link rel="stylesheet" href="/css/hover-min.css">
<link rel="stylesheet" href="/css/hover.css">

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="/animation/bubbles/2-style/raphael-min.js"></script>


<script type="text/javascript" src="/animation/bubbles/2-style/bubble-animation.js"></script>



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



                
        
                        <div class="title-courselist">
                            <h1 class="title-h1" style="text-shadow: 0 0 3px #808080, 0 0 5px #000000;">コース一覧</h1> 
                        </div>

                        


    <div class="container" style="margin-top: 250px !important; margin-bottom: 50px !important;">

        
        <div class="row">
            <div class="col-md-3">
             
            </div>
            <div class="col-md-6 content-center">

                    <dl class="faq">

                        <a href="{{ URL::to('/courselist/Gitdirector') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">グローバルITディレクターコース　　 　<div class="pull-right">115,000円（１週間）</div></dt></a>
      
                        <a href="{{ URL::to('/courselist/Bridgese') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">ブリッジＳＥコース　　　　　　<div class="pull-right">200,000円（１週間）</div></dt></a>

                        <a href="{{ URL::to('/courselist/Programmer') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">初心者向けプログラミングコース 　 　<div class="pull-right">65,000円（１週間）</div></dt></a>

                        <a href="{{ URL::to('/courselist/Designer') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">初心者向けデザインコース　　　　　 <div class="pull-right">65,000円（１週間）</div></dt></a>

                        <a href="{{ URL::to('/courselist/Internship') }}" style="text-decoration: none;"><dt class="grow rcorners6 numberlist">ブリッジディレクター コース 　 　<div class="pull-right">60,000円（１ヶ月）</div></dt></a>
                      
                    </dl>

            </div>
            <div class="col-md-3">
      
            </div>
        </div>






      
    </div><!-- container -->




@stop