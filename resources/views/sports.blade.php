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
                <li>Sports</li>
            </ol>
            <h2>Sports</h2>

        </div>
    </section>
     <!-- End Header section -->

    <!-- Container -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up">  
        <div class="container my-24 mx-auto md:px-6">
            <section class="mb-32 text-center">
                <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
                Sports Class
                </h2>

                <div class="mb-6 lg:mb-0">
                    <div class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="flex">
                            <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ config('app.url') }}img/portfolio/bball3.png" class="w-full" />
                            
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">Basketball Class</h5>
                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                            <small>Published <u>1.11.2023</u>
                                <a href="/new-activities/enrollment">Enroll now</a></small>
                            </p>
                            <p class="mb-4 pb-2">
                            Perfect for beginners to get ready for team training!
                            </p>  
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="flex">
                            <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ config('app.url') }}img/portfolio/fball2.png" class="w-full" />
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">Football</h5>

                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                            <small>Published <u>8.8.2023</u>
                                <a href="/new-activities/enrollment">Enroll now</a></div>
                            </p>

                            <p class="mb-4 pb-2">
                            Football is a popular sport, especially during the fall and winter months.
                            </p>
                        </div>
                    </div>
            </section>
        </div>
        </div>
        <!-- Container -->
    </section>
<!-- End English version -->
@else
<!-- Chinese version -->
       <!--  Header section  -->
       <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>運動</li>
            </ol>
            <h2>運動</h2>

        </div>
    </section>
     <!-- End Header section -->

    <!-- Container -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up">  
        <div class="container my-24 mx-auto md:px-6">
            <section class="mb-32 text-center">
                <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
               運動班
                </h2>

                <div class="mb-6 lg:mb-0">
                    <div class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="flex">
                            <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ config('app.url') }}img/portfolio/bball3.png" class="w-full" />
                            
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">籃球班</h5>
                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                            <small>舉辦 <u>1.11.2023</u>
                                <a href="/new-activities/enrollment">現在報名</a></small>
                            </p>
                            <p class="mb-4 pb-2">
                            非常適合初學者為團隊訓練做好準備
                            </p>  
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="flex">
                            <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ config('app.url') }}img/portfolio/fball2.png" class="w-full" />
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-3 text-lg font-bold">足球班</h5>

                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                            <small>舉辦 <u>8.8.2023</u>
                                <a href="/new-activities/enrollment">現在報名</a></div>
                            </p>

                            <p class="mb-4 pb-2">
                            足球是一項流行的運動，尤其是在秋季和冬季
                            </p>
                        </div>
                    </div>
            </section>
        </div>
        </div>
        <!-- Container -->
    </section>
<!-- End Chinese version -->
@endif
@endsection

