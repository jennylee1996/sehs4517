@extends('layouts.app')
@section('content')

@php
    $locale = session()->get('locale');
@endphp

@if ($locale == 'en')
<!-- English version -->

    <!--  Header section  -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Language</li>
            </ol>
            <h2>Language</h2>

        </div>
    </section>
    <!-- End Header section  -->
    
       <!-- Content -->
       <section class="inner-page">
        <div class="container" data-aos="fade-up">
            
            <section id="blog" class="blog">
                <div class="container align-items-center" data-aos="fade-up">
                            

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ config('app.url') }}img/portfolio/eng2.png" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            Join us in our Teen English Class
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> Kenny Lo</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>Dec 10, 2023</li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> 110 Comments</li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            We recognize that communication plays a vital role in self-expression and personal growth. Through our English language curriculum, we aim to empower teens with effective communication tools that can positively impact their lives.
                            </p>
                            <div>
                                <a href="/new-activities/enrollment">Enroll now</a>
                            </div>
                        </div>

                    </article>

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ config('app.url') }}img/portfolio/jlan3.png" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            Learning Japanese language to broaden your cultural awareness
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> Ken Ko</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>Oct 12, 2023</li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>232 Comments</li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            Cultural Understanding: Learning Japanese exposes teenagers to the rich and vibrant culture of Japan. They gain insights into traditional customs, etiquette, art forms, cuisine, and various aspects of Japanese society. This cultural understanding promotes empathy, appreciation for diversity, and a broader worldview.
                            </p>
                            <div>
                            <a href="/new-activities/enrollment">Enroll now</a>
                            </div>
                        </div>

                    </article>                           
                </div>
            </section>
    <!--End Content -->
        </div>
    </section>

<!-- English version -->
@else
<!-- Chinese version -->

    <!--  Header section  -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>語言</li>
            </ol>
            <h2>語言</h2>

        </div>
    </section>
    <!-- End Header section  -->
    
       <!-- Content -->
       <section class="inner-page">
        <div class="container" data-aos="fade-up">
            
            <section id="blog" class="blog">
                <div class="container align-items-center" data-aos="fade-up">
                            

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ config('app.url') }}img/portfolio/eng2.png" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            加入我們的青少年英語課程
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> Kenny Lo</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>12 10, 2023</li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> 110 評論</li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            我們認識到溝通在自我表達和個人成長中起著至關重要的作用。
                            透過我們的英語語言課程，我們的目標是為青少年提供有效的溝通工具，從而對他們的生活產生積極影響。
                            </p>
                            <div>
                                <a href="/new-activities/enrollment">現在報名</a>
                            </div>
                        </div>

                    </article>

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ config('app.url') }}img/portfolio/jlan3.png" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            學習日語以拓寬您的文化意識
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> Ken Ko</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>10 12, 2023</li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>232 評論</li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            文化理解：學習日語可以讓青少年接觸到日本豐富且充滿活力的文化。
                            他們深入了解傳統習俗、禮儀、藝術形式、美食以及日本社會的各個層面。這種文化理解促進同理心、對多樣性的欣賞和更廣泛的世界觀。
                            </p>
                            <div>
                            <a href="/new-activities/enrollment">現在報名</a>
                            </div>
                        </div>

                    </article>                       
                </div>
            </section>
    <!--End Content -->
        </div>
    </section>
<!-- End Chinese version -->

@endif
@endsection