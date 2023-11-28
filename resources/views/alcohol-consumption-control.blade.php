@extends('layouts.app')
@section('content')
<style>
.tittle { 
    background: url({{config("app.url")}}img/wine1.jpg);
    
}
</style>
<link rel="stylesheet" href="{{ config('app.url') }}css/alcohol.css" />
<?php
$locale = session('locale');
?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Alcohol Consumption Control</li>
            </ol>
            <h2>Alcohol Consumption Control</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>控制飲用酒精</li>
            </ol>
            <h2>控制飲用酒精</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->
                <!-- ======= Blog Section ======= -->
    @if($locale == 'tc')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="tittle">
            <h3>飲酒帶來的健康風險</h3>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h4>
                飲酒有損青少年腦部發展
                </h4>
                <ul>
                <p>
                研究顯示︰
                </p>
                                <li >
                                    <i class="ri-check-double-line" ></i>長期使用酒精的青少年記性較差
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>酒精是青少年大腦發展過程中的神經毒素，影響神經發育及行為控制
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>12 歲以下開始飲酒的青少年日後較有可能因飲酒而
作暴力行為或受傷，或缺課
                                </li>                           
                               
                                 <li >
                                    <i class="ri-check-double-line" ></i>18 歲以下開始飲酒的青少年於成年後較有可能
濫用或依賴酒精，而愈早 (15歲以下) 開始飲酒，
風險愈高
                                </li>                           
                                
                    </ul>

                    <br>
                    <h4>
                    過量飲酒可致暴斃

                </h4>
                <ul>
                <p>
                    <b>暴飲</b>
                </p>
                                <li >
                                    <i class="ri-check-double-line" ></i>一次過飲用至少5 罐/杯酒
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>‧可導致車禍、暴力行為、不安全性行為、
                                                酒精中毒…
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>研究顯示暴飲的青少年有較差的學習表現及
                                        較多的健康風險行為
                                </li>                           
                                <p><b>酒精中毒</b>
                </p>
                <li >
                                    <i class="ri-check-double-line" ></i>當血液內酒精濃度太高，神經系統中
                                                                        負責維持呼吸、心跳、體溫等的部
                                                                        分便會停止運作，可導致突然死亡
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>徵狀︰精神錯亂、嘔吐、抽搐、呼吸
                                                                    困難、面色變青或蒼白、昏迷

                                </li>                           
                                 
                                
                                
                    </ul>
                    <br>
        
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center ">
                  <img src="{{ config('app.url') }}img/wine2.jpg" alt="" >
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
    @endif
    @if($locale == 'en')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="tittle">
            <h3>Health Risks in Alcohol Use</h3>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h4>
                    Drinking is harmful to youths’ brain development
                </h4>
                <ul>
                <p>
                Research shows that:
                </p>
                                <li >
                                    <i class="ri-check-double-line" ></i>Youths with long-term alcohol consumption have poorer memory
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>Alcohol is a toxin against youth brain development. It affects
                                                                    nervous system development and self-control ability.
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>Youths who start drinking before age 12 are more likely to
                                                                            have violent behaviours or injuries later on due to drinking
                                                                            or to skip lessons.
                                </li>                           
                               
                                 <li >
                                    <i class="ri-check-double-line" ></i>Youths who start drinking before age 18 are more likely
                                        to develop alcohol abuse or dependence in adulthood.
                                        The risk would be even higher if they started drinking
                                        earlier (before age 15)
                                </li>                           
                                
                    </ul>

                    <br>
                    <h4>
                    Excessive drinking can cause death
                </h4>
                <ul>
                <p><b>
                Binge drinking</b>
                </p>
                                <li >
                                    <i class="ri-check-double-line" ></i>Drinking 5 cans/glasses or more of alcohol at one go.
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>Can lead to road traffic accidents, violent behaviours,
                                                    unsafe sex, alcohol poisoning, etc.
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>Research shows that binge-drinking youths have worse academic
                                                            performance and more risky behaviours against health.
                                </li>                           
                                <p><b>
                                Alcohol poisoning</b>
                </p>
                <li >
                                    <i class="ri-check-double-line" ></i>When blood alcohol content is too high, the
                                                                nerves that control breathing, heart beat,
                                                                body temperature, etc. will stop functioning,
                                                                causing sudden death.
                                </li>                           
                                 
                                 <li >
                                    <i class="ri-check-double-line" ></i>Symptoms: mental confusion, vomiting,
                                                                    seizures, breathing difficulty, blue-tinged or
                                                                    pale skin, coma.
                                </li>                           
                                 
                                
                                
                    </ul>
                    <br>
        
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center ">
                  <img src="{{ config('app.url') }}img/wine2.jpg" alt="" >
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
    @endif
@endsection
