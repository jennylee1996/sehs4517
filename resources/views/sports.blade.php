@extends('layouts.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Sports</li>
            </ol>
            <h2>Sports</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container my-24 mx-auto md:px-6">
        <section class="mb-32 text-center">
            <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
            Sports Class
            </h2>

            

            <div class="mb-6 lg:mb-0">
                <div
                class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="flex">
                    <div
                    class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="{{ config('app.url') }}img/portfolio/bball3.png" class="w-full" />
                    <a href="#!">
                        <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                        </div>
                    </a>
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="mb-3 text-lg font-bold">Basketball Class</h5>
                    <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                    <small>Published <u>1.11.2023</u>
                        <a href="/new-activities/enrollment">Enroll now</a></small>
                    </p>
                    <p class="mb-4 pb-2">
                    Perfect for beginners to get ready for team training! Before structured team practice, 
                    we recommend them to try out at the fundamental class. 
 
                    </p>
                    
                </div>
                </div>
            </div>

            <div class="mb-0">
                <div
                class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="flex">
                    <div
                    class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="{{ config('app.url') }}img/portfolio/fball2.png" class="w-full" />
                    <a href="#!">
                        <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                        </div>
                    </a>
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
            </div>
            </div>
        </section>
        <!-- Section: Design Block -->
        </div>
<!-- Container for demo purpose -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up">
           
        </div>
    </section>
@endsection
