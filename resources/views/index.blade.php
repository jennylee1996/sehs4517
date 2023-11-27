@extends('layouts.app')
@section('content')
<?php
$locale = session('locale');
?>
    @if($locale == 'en')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>Hong Kong Youth Support Association</h1>
                    <h2>We are team of professionals supporting youth growth</h2>
                    <a href="#about" class="btn-get-started scrollto">Stay tuned</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3>What is about HKYSA?</h3>
                        <p>
                            Prior to its establishment in 2023, our main service was youth training. We recognized the development and growth of young people in recent years.
                        </p>
                        <a href="{{ url('/about-us') }}" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Training Courses</h4>
                                <p>We aim to provide a wide range of training courses for children and young people.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Support Services</h4>
                                <p>We are dedicated to providing comprehensive support services for young people.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>Collaboration with Partners</h4>
                                <p>We strive to work closely with schools, universities, and organizations to develop effective programs.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Sponsorship and Funding</h4>
                                <p>We are committed to providing sponsorship and funding opportunities.</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Touching Testimonials from HKYSA: How the Association has Helped Shape the Lives of Young People in Hong Kong</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-1.jpg"
                                     class="testimonial-img" alt="">
                                <h3>Jason Tong</h3>
                                <h4>Program Graduate</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        The Hong Kong Youth Support Association has been instrumental in shaping my career. 
                                        Through their courses, I gained the necessary skills to excel in my field. The support 
                                        services provided have given me invaluable guidance and motivation. Thanks to their programs, 
                                        I am now equipped to pursue my dreams.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-2.jpg"
                                     class="testimonial-img" alt="">
                                <h3>Michelle Lee</h3>
                                <h4>Sponsored Beneficiary</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        I am grateful for The Hong Kong Youth Support Association. Their sponsorship and funding made it 
                                        possible for me to pursue vocational training. The association not only provided financial support 
                                        but also offered continuous guidance. Today, I have a rewarding career, and I owe my success to them.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-3.jpg"
                                     class="testimonial-img" alt="">
                                <h3>Emily Chow</h3>
                                <h4>Counseling Service Recipient</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        The Hong Kong Youth Support Association is a beacon of hope. Their counseling services helped me navigate 
                                        personal challenges. The association's commitment to holistic development has transformed my life and the 
                                        lives of others. I am forever grateful for their support.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-4.jpg"
                                     class="testimonial-img" alt="">
                                <h3>Alex Wong</h3>
                                <h4>Course Participant turned Employed Graduate</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        The Hong Kong Youth Support Association has been a game-changer. Their training courses allowed me to explore 
                                        industries and discover my passion. The knowledge and skills I gained have been invaluable in securing a job. 
                                        I am grateful for their dedication to our growth.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-5.jpg"
                                     class="testimonial-img" alt="">
                                <h3>Peter Kwok</h3>
                                <h4>Mentored Graduate</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        I am grateful for The Hong Kong Youth Support Association. With their mentorship, I gained the confidence to 
                                        navigate interviews and showcase my skills. Today, I am thriving in my career, and I owe a significant part 
                                        of my success to their support. Thank you!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>We are a team of professionals who aim to support youth growth, including experienced educators, trainers, psychologists and 
                    volunteers. </p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Program Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Senior Psychologist</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Funding Officer</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->
    @endif
    @if($locale == 'tc')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6">
                    <h1>香港青年支援協會</h1>
                    <h2>我們是一個支援青少年的專業團隊</h2>
                    <a href="#about" class="btn-get-started scrollto">了解</a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3>HKYSA是什麼組織?</h3>
                        <p>
                            在2023年成立之前，我們的主要服務是青年培訓。我們認識到近年來年輕人的發展和成長。
                        </p>
                        <a href="{{ url('/about-us') }}" class="about-btn"><span>有關我們</span> <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>培訓課程</h4>
                                <p>我們旨在為兒童和年輕人提供各種培訓課程，幫助他們發展職業技能。</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>支持服務</h4>
                                <p>除了培訓課程外，我們致力於為年輕人提供全面的支持服務。</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>合作夥伴</h4>
                                <p>我們努力與學校、大學和組織密切合作，開發滿足年輕人需求的有效計劃。</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>贊助和資助</h4>
                                <p>為了進一步實現我們的目標，我們致力於提供贊助和資助機會。</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>推薦</h2>
                <p>以下是有關香港青年支援協會的感人推薦：如何幫助塑造香港年輕人的生活</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-1.jpg"
                                     class="testimonial-img" alt="">
                                <h3>康傑生</h3>
                                <h4>項目畢業生</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        香港青年支援協會對塑造我的職業生涯起到了關鍵作用。通過他們的課程，我獲得了在我的領域中脫穎而出所需的技能。提供的
                                        支持服務為我提供了寶貴的指導和動力。由於他們的項目，我現在有能力追求自己的夢想。
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-2.jpg"
                                     class="testimonial-img" alt="">
                                <h3>李美雪</h3>
                                <h4>助受益人</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        我感激香港青年支援協會。他們的讚助和資金使我有可能接受職業培訓。該協會不僅提供了財務支持，還提供了持續的指導。今天，
                                        我擁有一個有意義的職業，我要歸功於他們。
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-3.jpg"
                                     class="testimonial-img" alt="">
                                <h3>周安妮</h3>
                                <h4>咨詢服務接受者</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        香港青年支援協會是一盞希望之燈。他們的咨詢服務幫助我應對個人挑戰。該協會致力於全面發展，改變了我的生活和他人的生活。
                                        我永遠感激他們的支持。
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-4.jpg"
                                     class="testimonial-img" alt="">
                                <h3>黃亞力</h3>
                                <h4>課程參與者轉為就業畢業生</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        香港青年支援協會是一個改變遊戲規則的機構。他們的培訓課程使我能夠探索行業並發現我的熱情。我獲得的知識和技能在確保工作
                                        方面具有無價值。我感激他們對我們成長的奉獻。
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ config('app.url') }}img/testimonials/testimonials-5.jpg"
                                     class="testimonial-img" alt="">
                                <h3>郭彼德</h3>
                                <h4>指導的畢業生</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        我感激香港青年支援協會。在他們的指導下，我獲得了自信，可以應對面試並展示我的技能。今天，我在我的職業中蓬勃發展，我要把
                                        我成功的重要部分歸功於他們。謝謝！
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>團隊</h2>
                <p>我們是一支專業團隊，旨在支持青年成長，包括經驗豐富的教育家、培訓師、心理學家和志願者。</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>行政總裁</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>項目經理</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>資深心理學家</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ config('app.url') }}img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>資助經理</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->
    @endif
@endsection
