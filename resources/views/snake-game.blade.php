@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ config('app.url') }}css/snakegame.css" />
<?php
$locale = session('locale');
?>
  <section class="breadcrumbs">
        <div class="container">

        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Snake</li>
            </ol>
            <h2>Snake</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>貪食蛇</li>
            </ol>
            <h2>貪食蛇</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container1" data-aos="fade-up">
        @if($locale == 'tc')
        <h1><b>貪食蛇</b></h1>
        <br>
        <div class="btn1">
        <button id="restartbtn" class="btn btn-secondary btn-lg"onclick="gameStart()" style="display: block;">開始遊戲</button>
        </div>
        @endif
        @if($locale == 'en')
        <h1><b>Snake</b></h1>
        <br>
        <div class="btn1">
        <button id="restartbtn" class="btn btn-secondary btn-lg"onclick="gameStart()" style="display: block;">Start</button>
        </div>
        @endif
        <br>
        <h1 id="score_id"></h1>
        <canvas width="400" height="400" id="canvas_id"></canvas>

        </div>
    </section>
    @if($locale == 'en')
    <script src="{{ config('app.url') }}js/snakegameEn.js"></script>
    @endif
    @if($locale == 'tc')
    <script src="{{ config('app.url') }}js/snakegameTc.js"></script>
    @endif
  
 
   
            
    @endsection