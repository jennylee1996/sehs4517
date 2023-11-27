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
                <li>Counselling</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="counselling" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Counselling</h2>
                <p>
                    The Hong Kong Youth Support Association provides various programs to help young people overcome their challenges and achieve their 
                    goals. The four major programs are:
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-award"></i>
                                <h3>Online Chat Counselling</h3>
                                <p>
                                    A hotline service that offers 24/7 emotional support and crisis intervention for youth who are facing difficulties or 
                                    challenges in their lives. The service is staffed by trained and experienced counsellors who can provide empathetic 
                                    listening, guidance, and referrals to other resources. The service is accessible by phone, text, or email.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-brain"></i>
                                <h3>Peer Support Group</h3>
                                <p>
                                    A group counselling service that facilitates peer support and mutual learning among youth who share common issues or 
                                    concerns. The service is led by professional counsellors who can help the group members to explore their feelings, 
                                    thoughts, and behaviors, and to develop coping skills and strategies. The service is conducted in a safe and confidential 
                                    environment, either online or offline.
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
                                <h3>Positive Role Model Mentoring</h3>
                                <p>
                                    A mentoring service that pairs up youth with positive role models who can inspire and motivate them to achieve their personal 
                                    and professional goals. The service is based on a mutual trust and respect between the mentors and the mentees, who can 
                                    communicate regularly and exchange feedback and advice. The service also provides opportunities for the mentees to network and 
                                    learn from other successful individuals and organizations.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-book"></i>
                                <h3>Self-Development Workshop</h3>
                                <p>
                                    A workshop service that educates and empowers youth to enhance their self-esteem, confidence, and resilience. The service covers 
                                    various topics such as communication skills, stress management, emotional intelligence, and career planning. The service is 
                                    delivered by engaging and interactive methods such as games, activities, and discussions. The service also encourages youth to 
                                    apply what they have learned to their daily lives and future endeavors.
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
                <li>輔導</li>
            </ol>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="counselling" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>輔導</h2>
                <p>
                香港青年支援協會提供各種計劃，幫助年輕人克服挑戰，實現目標。四個主要服務如下： 
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-award"></i>
                                <h3>在線聊天輔導</h3>
                                <p>
                                    一個熱線服務，為面臨困難或挑戰的青年提供24/7的情感支持和危機干預。該服務由訓練有素、經驗豐富的輔導員提供，他們可以提供同理心的傾聽、指導
                                    和轉介其他資源。該服務可通過電話、短信或電子郵件訪問。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-brain"></i>
                                <h3>同儕支持小組</h3>
                                <p>
                                    一個團體輔導服務，促進青年之間的同儕支持和相互學習，他們分享共同的問題或關注點。該服務由專業輔導員帶領，可以幫助小組成員探索他們的感受、
                                    思想和行為，並發展應對技能和策略。該服務在安全和保密的環境中進行，可以在線或離線進行。
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
                                <h3>積極角色模型指導</h3>
                                <p>
                                    一個指導服務，將青年與積極的角色模型配對，激勵和激勵他們實現個人和職業目標。該服務基於導師和被指導者之間的相互信任和尊重，他們可以定期交流
                                    並交換反饋和建議。該服務還提供機會，讓被指導者與其他成功的個人和組織建立網絡和學習。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-book"></i>
                                <h3>自我發展工作坊</h3>
                                <p>
                                    一個工作坊服務，教育和授權青年增強自尊、自信和韌性。該服務涵蓋各種主題，如溝通技巧、壓力管理、情商和職業規劃。該服務通過遊戲、活動和討論等
                                    引人入勝和互動的方法進行。該服務還鼓勵青年將所學應用於日常生活和未來的努力中。
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
