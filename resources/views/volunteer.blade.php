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
                <li>Volunteer</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="volunteer" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Volunteer</h2>
                <p>
                    The Hong Kong Youth Support Association provides various programs to help young people contribute to the communities and achieve their 
                    goals. The four major programs are:
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-award"></i>
                                <h3>Tutoring service</h3>
                                <p>
                                    This service aims to help students from low-income families or underprivileged backgrounds with their academic studies. 
                                    Volunteers can provide one-on-one or group tutoring sessions in various subjects, such as English, mathematics, science, 
                                    etc. The service also helps students with their homework, exam preparation, and learning skills.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-brain"></i>
                                <h3>Mentoring service</h3>
                                <p>
                                    This service aims to provide guidance and support to young people who are facing challenges or difficulties in their personal, 
                                    social, or career development. Volunteers can act as mentors or role models for the youth, offering advice, encouragement, and 
                                    inspiration. The service also helps the youth to explore their interests, goals, and potentials.
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
                                <h3>Community service</h3>
                                <p>
                                    This service aims to promote social responsibility and civic engagement among the youth. Volunteers can participate in various 
                                    community projects, such as environmental protection, elderly care, animal welfare, cultural diversity, etc. The service also 
                                    helps the youth to develop their leadership, teamwork, and communication skills.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-book"></i>
                                <h3>Arts and culture service</h3>
                                <p>
                                    This service aims to foster creativity and appreciation of arts and culture among the youth. Volunteers can organize or join 
                                    various arts and culture activities, such as music, dance, drama, painting, photography, etc. The service also helps the youth 
                                    to express themselves, discover their talents, and learn about different cultures.
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
                <li>義工</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="volunteer" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>義工</h2>
                <p>
                香港青年支援協會提供各種計劃，幫助年輕人貢獻社區，實現目標。四個主要服務如下： 
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-award"></i>
                                <h3>補習服務</h3>
                                <p>
                                    此服務旨在幫助來自低收入家庭或弱勢背景的學生進行學業研究。志願者可以提供各種科目的一對一或小組輔導課程，例如英語、數學、科學等。該服務
                                    還可以幫助學生完成家庭作業、考試準備和學習技能。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-brain"></i>
                                <h3>指導服務</h3>
                                <p>
                                    此服務旨在為面臨個人、社交或職業發展方面的挑戰或困難的年輕人提供指導和支持。志願者可以充當青年的導師或角色模型，提供建議、鼓勵和啟發。
                                    該服務還可以幫助青年探索他們的興趣、目標和潛力。
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
                                <h3>社區服務</h3>
                                <p>
                                    此服務旨在促進青年的社會責任感和公民參與。志願者可以參與各種社區項目，例如環境保護、老年護理、動物福利、文化多樣性等。該服務還可以幫助青年
                                    發展領導、團隊合作和溝通技能。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-book"></i>
                                <h3>藝術和文化服務</h3>
                                <p>
                                    此服務旨在培養青年的創造力和對藝術和文化的欣賞。志願者可以組織或參加各種藝術和文化活動，例如音樂、舞蹈、戲劇、繪畫、攝影等。該服務還可以幫助
                                    青年表達自己、發現自己的才能，並了解不同的文化。
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
