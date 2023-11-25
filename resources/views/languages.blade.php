@extends('layouts.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Language</li>
            </ol>
            <h2>Language</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->
       <!-- ======= Blog Section ======= -->
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

                    </article><!-- End blog entry -->

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

                    </article><!-- End blog entry -->

                    
                </div><!-- End blog entries list -->













    

    <section class="inner-page">
        <div class="container" data-aos="fade-up">
           
        </div>
    </section>
@endsection