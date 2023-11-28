@extends('layouts.app')
@section('content')

<?php
$locale = session('locale');
?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>How to Meet New Friends</li>
            </ol>
            <h2>How to Meet New Friends</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>如何認識新朋友</li>
            </ol>
            <h2>如何認識新朋友</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->
    @if($locale == 'en')
    <section class="inner-page">
    <div class="container">
    <h3>How to Meet New Friends</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    After leaving school, I haven’t made any new friends for a long time~ I always find it difficult to make new friends, and I don’t like talking as much as before! SISs, don’t limit your social circle. In fact, there are many people you can talk to. This time I introduce 6 effective ways to meet new friends to help you expand your social circle!
                    </p>
                    <ul>
                                <li >
                                    <i class="ri-check-double-line" ></i><b>1. Meet new friends from social networking sites</b>
                                </li>                           
                                 <p class="fst-italic">
                                 Today's young people love to play social networking sites, and SISs who want to make new friends can use these sites to meet some friends who have common interests with you. Whether it is Line, facebook, ptt and other social networking sites, they can all have something in common with " Interested netizens" leave messages to interact and get to know more friends from all over the world!
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>2. Use dating apps</b>
                                </li>                           
                                 <p class="fst-italic">
                                 These dating APPs allow you to meet nearby friends anytime and anywhere. The reason why these APPs are better than social networking sites is that they have a filtering function for friend conditions. You can set all the conditions yourself~ This way you can ensure Find friends who share the same goals with you!
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>3. Take interest classes</b>
                                </li>                           
                                 <p class="fst-italic">
                                 Take some talent classes that you are interested in, such as dance classes. If you like to be static, you can choose to learn Korean or Japanese. In the class, you will naturally get to know friends who have common interests and hobbies, and you can quickly get into familiar topics with them. middle!
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>4. Table games</b>
                                </li>                           
                                 <p class="fst-italic">
                                 Friends who like to play online games can use this method to meet new friends. Even if they have made a date, chatting about the game will be enough for you to chat for tomorrow!
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>5. Go to a friend’s party</b>
                                </li>                           
                                 <p class="fst-italic">
                                 If they are already your friends, then it will be easy for your friends’ friends to become good friends with you. If you meet new friends this way, you will be less likely to recognize them as bad friends, because the new friends are already familiar with your friends, so You can also learn about his things from your friends, and you can also go out with three or four of them in the future!
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>6. Workplace</b>
                                </li>                           
                                 <p class="fst-italic">
                                 "It's hard to make close friends after you leave society." This is not necessarily the case! Never limit your social space! Get to know the new colleagues next to you, which may help you a lot at work!
                                 </p>
                    </ul>
                    <p>You don’t have too many friends~ It’s even rarer to have close friends!</p>
   
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ config('app.url') }}img/friends1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    </section>
    @endif
    
    @if($locale == 'tc')
    <section class="inner-page">
    <div class="container">
    <h3>如何認識新朋友</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    離開學校以後，已經很久沒有認識新的朋友了~總是覺得很難認識新的朋友，而且沒以前般喜愛說話了！SIS們可別限制著自己的社交圈子哦，其實跟你談得來的人可是多的是，這次介紹6個有效認識新朋友的方法助你擴大社會圈子！
                    </p>
                    <ul>
                                <li >
                                    <i class="ri-check-double-line" ></i><b>1. 從社群網站認識新的朋友</b>
                                </li>                           
                                 <p class="fst-italic">
                                 現在的年輕人都愛玩社交網站，而想認識新朋友的SIS們可以從這些網站認識一些跟你有共同興趣的朋友，不論是Line、facebook、ptt等社群網站，都能與「有共通興趣的網友們」留言互動，多認識來自世界各地的朋友！
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>2. 使用交友APP</b>
                                </li>                           
                                 <p class="fst-italic">
                                 這些交友APP，能讓你隨時隨地認識附近的朋友，這些APP比社交網站更好的原因是，它設有朋友條件的過濾功能，你喜歡什麼條件，統統都可以自己設定~這樣就能確保找到和你志同道合的好友啦！
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>3. 上興趣班</b>
                                </li>                           
                                 <p class="fst-italic">
                                 上一些自己有興趣的才藝班，例如跳舞班，喜歡靜態的可以選擇學一下韓文、日文，在課堂上自然就能認識好友，有共同的興趣嗜好，能快速讓你跟他們進入熟絡的話題中！
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>4. 桌上遊戲</b>
                                </li>                           
                                 <p class="fst-italic">
                                 喜歡打線上遊戲的SIS們可以靠這招來認識新朋友哦，即便是約了出來，一直聊遊戲的內容已經夠你們聊天明天了啊！
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>5. 去朋友的聚會</b>
                                </li>                           
                                 <p class="fst-italic">
                                 已經是你的朋友，那麼你朋友的朋友們肯定也很容易跟你成為好朋友哦，這個方法認識新朋友，比較不會認識到損友，因為新的朋友已經跟你的朋友得熟，那你也可以從你朋友口中知道他的事情，以後也可以3個、4個一起約出去啊！
                                 </p>
                                 <li >
                                    <i class="ri-check-double-line" ></i><b>6. 職場</b>
                                </li>                           
                                 <p class="fst-italic">
                                 「出了社會之後就很難認識到交心的朋友了」，這句話可不一定哦！千萬不要局限自己的交友空間！多認識你旁邊新進的同事，這樣工作上可能也會有不少的幫助哦！
                                 </p>
                    </ul>
                    <p>朋友都不嫌多哦~認識到知心好友更是難得！</p>
   
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ config('app.url') }}img/friends1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    </section>
    @endif
@endsection

