@extends('layouts.app')
@section('content')
<style>
    img {

    transform: scale(0.5);
}
    </style>
<?php
$locale = session('locale');
?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>How to Relieve Pressure</li>
            </ol>
            <h2>How to Relieve Pressure</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>如何減輕壓力</li>
            </ol>
            <h2>如何減輕壓力</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->
    @if($locale == 'en')
    <section class="inner-page">
    <div class="container">
    <h3>How to Relieve Pressure</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    Stress is familiar to everyone. You or the people around you may often talk about it. The difference is that different people experience stress and are affected to different extents. People who strive to do their best will be the most stressed. Stress can come from work, family, friends, or even from any detail in life. When faced with changes in life, such as entering a higher education, changing jobs, getting promoted, getting married, getting divorced, etc., stress will arise. Some people adapt easily, while others have adaptation problems.
                    </p>
                    <p>
                    There are different ways to relieve stress. If handled well, it will promote physical and mental health; if handled improperly, it is easy to develop emotional problems, mental stress, or be unable to sleep peacefully at night. In severe cases, it may even lead to mental illness. It is a good way to relieve tension and keep your mood relaxed. But how to do it varies from person to person; at the same time, we should also look at where the problem lies and prescribe the right medicine to get twice the result with half the effort.
                    </p>
                    <p>
                    We provide eight tips here for your reference. We hope that some of these methods can help some friends who are currently troubled by stress.
                    </p>
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ config('app.url') }}img/Stress1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        
        <div class="tab-pane" id="tab-4">
            <div class="row">                
                <div class="col-lg-6 order-1 order-lg-1 text-center">
                  <img src="{{ config('app.url') }}img/Stress2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0">
                <ul>
                                <li >
                                    <i class="ri-check-double-line" ></i><b>Pay attention to your diet:</b>
                                </li>                           
                                 <p class="fst-italic">
                                 Have a balanced eating habit. Avoid excessive smoking and drinking. Smoking and alcohol cannot relieve your stress. Excessive consumption can make you depressed, affect your health, and then affect your work and life.
                                 </p>
                                <li>
                                    <i class="ri-check-double-line"></i><b> Stay active:</b>
                                </li>
                                 <p class="fst-italic">
                                 Exercise not only improves physical health, but is also a good way to reduce stress. During exercise, the mind has no time to dwell on worries; at the same time, the body is tired after exercise and it is easier to fall asleep at night.
                                 </p>
                             
                                 
                                <li><i class="ri-check-double-line"></i><b>Self-relaxation:</b>
                                </li>
                                <p class="fst-italic">
                                Doing some relaxation exercises can also help reduce stress. For relaxation methods, please refer to the basic relaxation method for living a relaxed life compiled by our association.
                                 </p>
   
                                 <li><i class="ri-check-double-line"></i><b>Cultivate interest:</b>
                                </li>
                                <p class="fst-italic">
                                Cultivating leisure interests is a kind of spiritual sustenance. Some people choose to listen to music, some like photography. As long as you are interested, the pressure will naturally be alleviated.
                                 </p>
                                 <li><i class="ri-check-double-line"></i><b>Planning work:</b>
                                </li>
                                <p class="fst-italic">
                                Some stress comes from not knowing how to arrange daily tasks, which makes you busy all day long and unable to get things done. If you can arrange your work properly and in an orderly manner, your work stress will naturally be reduced.
                                 </p>
                                 <li><i class="ri-check-double-line"></i><b>Learn to say no:</b>
                                </li>
                                <p class="fst-italic">
                                    Chinese people are more polite. When others ask for something, no matter how unwilling they are, they will not categorically refuse something they know they cannot handle, thus causing a lot of pressure. If you know how to say "no" simply and politely, you can reduce a lot of unnecessary stress. Cultivating leisure interests is a kind of spiritual sustenance. Some people choose to listen to music, some like photography. As long as you are interested, stress will naturally be eased
                                 </p>
                            </ul>
                </div>
            

            </div>
        </div>
    </div>
  

    </section>
    @endif
    
    @if($locale == 'tc')
    <section class="inner-page">
    <div class="container">
    <h3>如何減輕壓力</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    壓力對任何人都不陌生，你或你身旁的人都可能常常掛在口邊，分別在於不同的人感受壓力及受影響的程度各有不同。

力圖希望自己做到最好的人，壓力也會最大。壓力可以來自工作、家庭、朋友，甚至來自生活上的任何細節。

要面對生活轉變時，倒如升學、轉工、升職、結婚、離婚等，壓力都會出現。有些人能輕易適應，有些卻會出現適應問題。


                    </p>
                    <p>
                    舒緩壓力，有不同的方式。處理得好，會促進心身健康;_若處理得不當，便很容易出現情緒問題、精神緊張，或晚上不能安睡，嚴重時更可能引發精神毛病。

緩和緊張的情緒，令心情保持舒暢，是減壓良方。但如何可以做到，就因人而異；同時也要看看問題出在那裏，對症下藥，便會事半功倍
                    </p>
                    <p>
                    我們在此提供八大要訣讓大家參考，希望其中有些方法，可以幫助一些現時被壓力困擾著的朋友。
                    </p>
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ config('app.url') }}img/Stress1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="tab-pane" id="tab-4">
            <div class="row">                
                <div class="col-lg-6 order-1 order-lg-1 text-center">
                  <img src="{{ config('app.url') }}img/Stress2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0">
                <ul>
                                <li >
                                    <i class="ri-check-double-line" ></i><b>注意飲食：</b>
                                </li>                           
                                 <p class="fst-italic">
                                 要有均衡的飲食習慣。切忌過量吸煙、飲酒。煙酒不能為你減壓，過量反而令人精神委靡，影響身體健康，繼而影響工作、生活。
                                 </p>
                                <li>
                                    <i class="ri-check-double-line"></i><b> 保持運動：</b>
                                </li>
                                 <p class="fst-italic">
                                 運動不只可以增進身體健康，同時更是減壓的良方。運動時思想無暇糾纏於煩惱中;_同時運動後身體疲累，晚上亦較易入睡。
                                 </p>
                             
                                 
                                <li><i class="ri-check-double-line"></i><b>自我鬆弛：</b>
                                </li>
                                <p class="fst-italic">
                                做一些鬆弛練習，亦有助減壓。有關鬆弛的方法，可參考本會所編制的輕輕鬆鬆過生活之鬆弛基本法。
                                 </p>
   
                                 <li><i class="ri-check-double-line"></i><b>培養興趣：</b>
                                </li>
                                <p class="fst-italic">
                                培養消閑興趣，是一種精神寄託。有些人選擇聽音樂，有些人喜歡攝影。只要能投入興趣，壓力自然也較易被淡化。
                                 </p>
                                 <li><i class="ri-check-double-line"></i><b>計劃工作：</b>
                                </li>
                                <p class="fst-italic">
                                有些壓力來自不懂得安排日常工作的先後次序，弄至整天忙忙碌碌，也不能將事情做好。如能將工作編排妥當，有條不紊，工作壓力自然也會隨之減少。
                                 </p>
                                 <li><i class="ri-check-double-line"></i><b>學習說不：</b>
                                </li>
                                <p class="fst-italic">中國人較客套，別人有事要求時，就算心底多麼不願意，也不會斷然拒絕一些明知自己應付不來的事情， 因而做成不少壓力。如果懂得乾脆而有禮貌地說“不”，便能減少很多不必要的壓力。培養消閑興趣，是一種精神寄託。有些人選擇聽音樂，有些人喜歡攝影。只要能投入興趣，壓力自然也較易被淡化。
                                 </p>
                            </ul>
                </div>
            

            </div>
        </div>
    </div>
  

    </section>
    @endif 
@endsection

