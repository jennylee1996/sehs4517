@extends('layouts.app')
@section('content')
<?php
$locale = session('locale');
?>
    @if($locale == 'en')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Education</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="education" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Education</h2>
                <p>
                    The Hong Kong Youth Support Association provides various programs to help young people achieve their educational and personal goals. 
                    The four major programs are:
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-award"></i>
                                <h3>Youth Tutoring Program</h3>
                                <p>
                                    This program matches volunteer tutors with students who need academic assistance in various subjects. The tutors 
                                    are mostly university students or young professionals who have expertise in the subjects they teach. The program 
                                    aims to help students improve their grades, confidence, and motivation in learning.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-brain"></i>
                                <h3>Youth Mentoring Program</h3>
                                <p>
                                    This program connects young people with mentors who can provide guidance, support, and inspiration for their personal 
                                    and professional development. The mentors are successful individuals from different fields and backgrounds who have 
                                    valuable experience and insights to share. The program helps young people explore their interests, goals, and potentials.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div><br></div>
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-bulb"></i>
                                <h3>Youth Leadership Program</h3>
                                <p>
                                    This program trains young people to become effective leaders and positive change-makers in their communities. The program 
                                    covers topics such as communication skills, teamwork, problem-solving, critical thinking, and social responsibility. The 
                                    program also provides opportunities for young people to apply their skills in real-life projects and activities.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-book"></i>
                                <h3>Youth Exchange Program</h3>
                                <p>
                                    This program enables young people to travel to different countries and cultures and learn from their peers and hosts. The 
                                    program fosters intercultural understanding, friendship, and cooperation among young people from diverse backgrounds. The 
                                    program also enhances young people’s language skills, global awareness, and adaptability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div><br></div>
            <div class="section-title">
                <p>
                    Please feel free to contact us for more information.
                </p>
            </div>
        </div>
    </section>
    @endif
    @if($locale == 'tc')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>教育</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="education" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>教育</h2>
                <p>
                    香港青年支援協會提供各種計劃，幫助年輕人實現他們的教育和個人目標。四個主要服務如下：
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-award"></i>
                                <h3>青年輔導計劃</h3>
                                <p>
                                    該計劃將志願輔導員與需要在各種科目中獲得學術幫助的學生匹配。導師大多是大學生或年輕專業人士，具有他們所教科目的專業知識。該計劃旨在幫助
                                    學生提高成績，信心和學習動機。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-brain"></i>
                                <h3>青年導師計劃</h3>
                                <p>
                                    該計劃將年輕人與導師聯繫起來，為他們的個人和職業發展提供指導，支持和啟發。導師是來自不同領域和背景的成功人士，具有寶貴的經驗和見解。該計
                                    劃幫助年輕人探索他們的興趣，目標和潛力。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div><br></div>
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-bulb"></i>
                                <h3>青年領袖計劃</h3>
                                <p>
                                    該計劃培訓年輕人成為有效的領袖和積極的變革者，為他們的社區做出貢獻。該計劃涵蓋的主題包括溝通技巧，團隊合作，解決問題，批判性思維和社會責
                                    任。該計劃還為年輕人提供了在現實生活中應用其技能的機會和活動。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-book"></i>
                                <h3>青年交流計劃</h3>
                                <p>
                                    該計劃使年輕人能夠前往不同的國家和文化，向他們的同儕和主人學習。該計劃促進了來自不同背景的年輕人之間的跨文化理解，友誼和合作。該計劃還增強
                                    了年輕人的語言能力，全球意識和適應能力。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div><br></div>
            <div class="section-title">
                <p>
                    想了解更多詳情，歡迎聯絡我們。
                </p>
            </div>
        </div>
    </section>
    @endif
@endsection
