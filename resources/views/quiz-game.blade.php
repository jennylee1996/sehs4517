@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ config('app.url') }}css/quizgame.css" />
<?php
$locale = session('locale');
?>
  <section class="breadcrumbs">
        <div class="container">

        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Quiz Game</li>
            </ol>
            <h2>Quiz Game</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>問答遊戲</li>
            </ol>
            <h2>問答遊戲</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="container1" >
        @if($locale == 'en')
            <h1><b>Quiz Game</b></h1>
            @endif
            @if($locale == 'tc')
            <h1><b>問答遊戲</b></h1>
            @endif
            <br>
            <div id="question"></div>
            <br>
            <div id="options" ></div>
            <br>
            
           
            @if($locale == 'en')
            <button id="startButton">Start</button>
            @endif
            @if($locale == 'tc')
            <button id="startButton">開始</button>
            @endif
            <br>
            @if($locale == 'en')
            <div id="next">
            <button id="nextButton" class="btn btn-secondary btn-lg" style="display: none;">Next</button>
            </div>
            @endif
            @if($locale == 'tc')
            <div id="next">
            <button id="nextButton" class="btn btn-secondary btn-lg" style="display: none;">下一題</button>
            </div>
            @endif
            <div id="result"></div>
            @if($locale == 'en')
            <div id="restar">
            <button id="restartButton" class="btn btn-secondary btn-lg" style="display: none;">Restart</button>
        </div>
            @endif
            @if($locale == 'tc')
            <div id="restar">
            <button id="restartButton" class="btn btn-secondary btn-lg" style="display: none;">重新開始</button>
        </div>
            @endif
            </div>
        </div>
    </section>
    @if($locale == 'en')
    <script src="{{ config('app.url') }}js/quizgameEN.js"></script>
    @endif
    @if($locale == 'tc')
    <script src="{{ config('app.url') }}js/quizgameTC.js"></script>
    @endif
            
    @endsection