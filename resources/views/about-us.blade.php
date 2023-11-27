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
                <li>About us</li>
            </ol>
            <h2>About us</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block">Establishment</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block">Core Objectives</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <i class="ri-sun-line"></i>
                        <h4 class="d-none d-lg-block">Other Objectives</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <i class="ri-store-line"></i>
                        <h4 class="d-none d-lg-block">Commitment</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <h3>Establishment</h3>
                            <p class="fst-italic">
                                The Hong Kong Youth Support Association (HKYSA) was established in 2023. Prior to its establishment, our main 
                                service was youth training. We recognized the development and growth of young people in recent years, and we 
                                firmly believe that making real and effective changes in their lives can have a positive impact.
                            </p>
                            <p class="fst-italic">
                                Our vision is to empower young people to achieve their full potential and contribute to the society. Our mission 
                                is to provide holistic and diversified services to young people, such as counselling, mentoring, education, employment, 
                                and community engagement. Our values are respect, compassion, professionalism, and innovation.
                            </p>
                            <p class="fst-italic">
                                We have a team of experienced and passionate staff who are dedicated to serving the needs and aspirations of young people. 
                                We also collaborate with various partners and stakeholders, such as schools, NGOs, government agencies, and businesses, to 
                                create a supportive and inclusive environment for young people.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ config('app.url') }}img/tabs-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Core Objectives</h3>
                            <p class="fst-italic">
                                In the future, we will specifically focus on the following objectives:
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i>
                                    Training Courses: We aim to provide a wide range of training courses for children and young people, to help them 
                                    develop vocational skills and enhance their employability. These courses will cover various industries and professions, 
                                    equipping them with practical knowledge and capabilities.
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    Support Services: In addition to training courses, we are dedicated to providing comprehensive support services for young 
                                    people. This includes mentoring programs, counseling services, and career guidance, which will empower them to make informed 
                                    choices and navigate challenges.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ config('app.url') }}img/tabs-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Other Objectives</h3>
                            <p>
                                In the future, we will specifically focus on the following objectives:
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i>
                                    Collaboration with Partners: We strive to work closely with schools, universities, and organizations to develop effective 
                                    programs that meet the needs of young people. By fostering collaboration, we can offer holistic support and create 
                                    opportunities for youngsters to excel in various aspects of their lives.
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    Sponsorship and Funding: To further our objectives, we are committed to providing sponsorship and funding opportunities. 
                                    This support will enable the beneficiaries to participate in education, vocational training, and other specialized programs 
                                    that contribute to their personal and professional development.
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ config('app.url') }}img/tabs-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Commitment</h3>
                            <p class="fst-italic">
                                We hope to inspire young people to discover their strengths, pursue their dreams, and overcome their challenges. We also hope to 
                                foster a culture of mutual respect, understanding, and harmony among young people and the society. We believe that young people 
                                are the future of Hong Kong, and we are committed to supporting them in their journey of growth and development.
                            </p>
                            <p class="fst-italic">
                                We are committed to collaborating with young people, schools, and other partners in coordinating and supporting 
                                services that promote youth growth.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ config('app.url') }}img/tabs-4.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Tabs Section -->
@endif
@if($locale == 'tc')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>關於我們</li>
            </ol>
            <h2>關於我們</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>服務對象</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>項目</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>支援時數</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>工作人員</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block">成立</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block">核心目標</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <i class="ri-sun-line"></i>
                        <h4 class="d-none d-lg-block">其他目標</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <i class="ri-store-line"></i>
                        <h4 class="d-none d-lg-block">承諾</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <h3>成立</h3>
                            <p class="fst-italic">
                                香港青年支援協會（HKYSA）成立於2023年。在成立之前，我們的主要服務是青年培訓。我們認識到近年來年輕人的發展和成長，我們堅信在他們的生活中
                                進行真正和有效的改變可以產生積極的影響。
                            </p>
                            <p class="fst-italic">
                                我們的願景是賦予年輕人實現其全部潛力並為社會做出貢獻的能力。我們的使命是為年輕人提供全面和多元化的服務，如咨詢、指導、教育、就業和社區參與。
                                我們的價值觀是尊重、同情、專業和創新。
                            </p>
                            <p class="fst-italic">
                                我們擁有一支經驗豐富、充滿激情的團隊，致力於服務年輕人的需求和願望。我們還與各種合作夥伴和利益相關者合作，如學校、非政府組織、政府機構和企業，
                                為年輕人創造一個支持性和包容性的環境。
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ config('app.url') }}img/tabs-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>核心目標</h3>
                            <p class="fst-italic">
                                在未來，我們將特別關注以下目標：
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i>
                                    培訓課程：我們旨在為兒童和年輕人提供各種培訓課程，幫助他們發展職業技能，增強就業能力。這些課程將涵蓋各種行業和職業，為他們提供實用知識和能力。
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    支持服務：除了培訓課程外，我們致力於為年輕人提供全面的支持服務。這包括指導計劃、輔導服務和職業指導，這些將使他們能夠做出明智的選擇並應對挑戰。
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ config('app.url') }}img/tabs-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>其他目標</h3>
                            <p>
                                在未來，我們將特別關注以下目標：
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i>
                                    與合作夥伴合作：我們努力與學校、大學和組織密切合作，開發滿足年輕人需求的有效計劃。通過促進合作，我們可以提供全面的支持，並為年輕人在生活的各個方面創造機會。
                                </li>
                                <li><i class="ri-check-double-line"></i>
                                    贊助和資助：為了進一步實現我們的目標，我們致力於提供贊助和資助機會。這種支持將使受益人能夠參加教育、職業培訓和其他專業計劃，這些計劃有助於他們的個人和職業發展。
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ config('app.url') }}img/tabs-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>承諾</h3>
                            <p class="fst-italic">
                                我們希望激勵年輕人發現自己的優勢，追求自己的夢想，克服自己的挑戰。我們也希望在年輕人和社會之間培養相互尊重、理解和和諧的文化。我們相信年輕人是香港的未來，我們
                                致力於支持他們的成長和發展之旅。
                            </p>
                            <p class="fst-italic">
                                我們致力於與年輕人、學校和其他合作夥伴合作，協調和支持促進青年成長的服務。
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ config('app.url') }}img/tabs-4.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Tabs Section -->
@endif
@endsection
