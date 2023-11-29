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
                <li>Gallery</li>
            </ol>
            <h2>Past Activities Gallery</h2>

        </div>
    </section>
    <!-- End Header section -->

    <!-- Gallery Section -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
                <p></p>
            </div>
            
            <!-- Filter section -->
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-sport">Sport</li>
                        <li data-filter=".filter-language">Language</li>
                        <li data-filter=".filter-leadership">Leadership</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/bball.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Basketball class</h4>
                            <p>sport</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/bball.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Basketball class at 2019-10-10"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-language">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/eng1.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>English class</h4>
                            <p>language</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/eng1.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="English class at 2018-5-6"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/bball2.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Basketball class</h4>
                            <p>sport</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/bball2.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Basketball class at 2021-12-4"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-leadership">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/teen1.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Leadership class</h4>
                            <p>leadership</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/teen1.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Leadership class at 2021-12-4"><i class="bx bx-plus"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-language">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/jlan.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Japanese class</h4>
                            <p>language</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/jlan.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Japanese class at 2022-1-7"><i class="bx bx-plus"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-language">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/jlan2.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Japanese class</h4>
                            <p>language</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/jlan2.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Japanese class at 2022-11-27"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/fball.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Football class</h4>
                            <p>sport</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/fball.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Football class at 2020-5-2"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-leadership">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/teen2.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Leadership class </h4>
                            <p>leadership</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/teen2.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Leadership class at 2022-4-6"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-leadership">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/dan1.png" class="img-fluid  portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>Leadership class</h4>
                            <p>leadership</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/dan1.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Leadership class at 2023-9-10"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End gallery Section -->

<!-- End English version -->
@else
<!-- Chinese version -->

     <!--  Header section  -->
     <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>畫廊</li>
            </ol>
            <h2>活動畫廊</h2>

        </div>
    </section>
    <!--  End header section  -->

    <!-- Gallery Section -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>畫廊</h2>
                <p></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">全部</li>
                        <li data-filter=".filter-sport">運動</li>
                        <li data-filter=".filter-language">語言</li>
                        <li data-filter=".filter-leadership">領袖營</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/bball.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>籃球班</h4>
                            <p>運動</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/bball.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="籃球班 2019-10-10"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-language">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/eng1.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>英文班</h4>
                            <p>語言</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/eng1.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="英文班 2018-5-6"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/bball2.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>籃球班</h4>
                            <p>運動</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/bball2.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="籃球班 2021-12-4"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-leadership">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/teen1.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>領袖班</h4>
                            <p>領袖營</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/teen1.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="領袖班 2021-12-4"><i class="bx bx-plus"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-language">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/jlan.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>日文班</h4>
                            <p>語言</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/jlan.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="日文班 2022-1-7"><i class="bx bx-plus"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-language">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/jlan2.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>日文班</h4>
                            <p>語言</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/jlan2.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="日文班 2022-11-27"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sport">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/fball.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>足球班</h4>
                            <p>運動</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/fball.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="足球班 2020-5-2"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-leadership">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/teen2.png" class="img-fluid portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>領袖班</h4>
                            <p>領袖營</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/teen2.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="領袖班 2022-4-6"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-leadership">
                    <div class="portfolio-wrap">
                        <img src="{{ config('app.url') }}img/portfolio/dan1.png" class="img-fluid  portfolio-img" alt="">
                        <div class="portfolio-info">
                            <h4>領袖班</h4>
                            <p>領袖營</p>
                            <div class="portfolio-links">
                                <a href="{{ config('app.url') }}img/portfolio/dan1.png"
                                   data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="領袖班 2023-9-10"><i class="bx bx-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End gallery Section -->

<!-- End Chinese version -->
@endif
@endsection
