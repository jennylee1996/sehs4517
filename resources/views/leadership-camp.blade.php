@extends('layouts.app')
@section('content')

@php
    $locale = session()->get('locale');
@endphp

@if ($locale == 'en')
<!-- English version -->

    <!-- Header section -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Leadership Camp</li>
            </ol>
            <h2>Leadership Camp</h2>

        </div>
    </section>
    <!-- End header section -->

   <!-- Content section-->
   <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                            <img src="{{ config('app.url') }}img/portfolio/camp1.png" alt="" class="img-fluid">   
                    </div>
                </div>
                
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Leadership Camping</h4>
                                <p>Leadership camp encourages individuals to embrace challenges and take initiative. 
                                    Participants are often presented with opportunities to step outside their comfort zones, tackle obstacles, and develop problem-solving skills. 
                                    This fosters a growth mindset, resilience, and the ability to navigate uncertainty—a valuable asset for 
                                    leaders who must navigate complex situations and guide their teams through adversity.
                                </p>
                                
                                <!-- enroll button-->
                                <a href="/new-activities/enrollment" class="about-btn">Enroll Now</a>
                            </div>
                        </div>
                    </div> 
                </div>   
            </div>
        </div>
    </section>
    <!-- End content section -->

     <section class="inner-page">
        <div class="container" data-aos="fade-up">
           
        </div>
    </section>

<!-- End English version -->
@else
<!-- Chinese version -->

    <!-- Header section -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>領袖營</li>
            </ol>
            <h2>領袖營</h2>

        </div>
    </section>
    <!-- End header section -->

   <!-- Content section-->
   <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                            <img src="{{ config('app.url') }}img/portfolio/camp1.png" alt="" class="img-fluid">   
                    </div>
                </div>
                
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>領袖營</h4>
                                <p>領導力營鼓勵個人接受挑戰並採取主動。
                                    參與者經常有機會走出自己的舒適圈、克服障礙並培養解決問題的技能。
                                    這培養了成長心態、韌性和駕馭不確定性的能力——這是對企業來說的寶貴資產。
                                    領導者必須應對複雜的情況並引導團隊度過逆境。
                                
                                <!-- enroll button-->
                                <a href="/new-activities/enrollment" class="about-btn">現在報名</a>
                            </div>
                        </div>
                    </div> 
                </div>   
            </div>
        </div>
    </section>
    <!-- End content section -->

     <section class="inner-page">
        <div class="container" data-aos="fade-up">
           
        </div>
    </section>



@endif
@endsection