@extends('layouts.app')
@section('content')
<?php
$locale = session('locale');


?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Questionnaire Survey</li>
            </ol>
            <h2>Questionnaire Survey</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>問卷調查</li>
            </ol>
            <h2>問卷調查</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->
    @if($locale == 'tc')
    <section class="inner-page">
        <div class="container" data-aos="fade-up">
        @if($input == "PHQ-9")
                @if(0 <= $final_mark && $final_mark <= 27)
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">沒有心理問題 ^_^</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
                    @if(27 < $final_mark && $final_mark <=39 )
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">經常留意抑鬱情緒，並保持平常心情。</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
                    @if(39 < $final_mark && $final_mark <=49 )
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">有潛在抑鬱症，請到醫院接受詳盡檢查。</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
                    @if(49 < $final_mark && $final_mark <=63 )
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">有嚴重抑鬱問題，請及早到醫院接受治療。</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
            @endif
            @if($input == "GAD-7")
                @if(0 <= $final_mark && $final_mark <= 21)
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">沒有心理問題 >_<</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
                    @if(21 < $final_mark && $final_mark <=28 )
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">經常留意焦慮情緒，並保持平常心情。</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
                    @if(28 < $final_mark && $final_mark <=39 )
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">有潛在焦慮症，請到醫院接受詳盡檢查。</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
                    @if(39 < $final_mark && $final_mark <=49 )
                        <p>
                        問卷種類為: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">有嚴重焦慮問題，請及早到醫院接受治療。</b>
                        </p>
                        <p>
                        最終分數: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">再試一次</a>
                    @endif
            @endif
            @if($input == "" && $final_mark =="")
            <div id="form1">
                <form action="{{ url('leisure-zone/questionnaire') }}" method="post">
                    @csrf
                    <h2>問卷種類</h2>
                        <select
                            class="selectStore"
                            id="store"
                            name="store"
                            onchange="change_QuestionTC()"
                            >
                            <option value="PHQ-9" >PHQ-9</option>
                            <option value="GAD-7" >GAD-7</option>
                            
                         </select>
                    <p id="QDescription">PHQ-9 問題用於測試及評估<b style="font-size:22.5px;">抑鬱</b>程度</p>
                         <div class="table-responsive-sm">
                                <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%" scope="col">  </th>
                                                    <th style="width:20%"scope="col">完全沒有</th>
                                                    <th style="width:20%"scope="col">幾天</th>
                                                    <th style="width:20%"scope="col">一半以上的天數</th>
                                                    <th style="width:20%"scope="col">近乎每天</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableContent">
                                            <tr>
                                                    <th scope="row" id="q1">感到緊張、不安或煩躁</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td class="span2">
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q2">情緒低落、抑鬱或絕望</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row"id="q3">難於入睡；半夜會醒或相反地睡覺時間過多</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <th style="width:20%" scope="col">  </th>
                                                    <th style="width:20%"scope="col">完全沒有</th>
                                                    <th style="width:20%"scope="col">幾天</th>
                                                    <th style="width:20%"scope="col">一半以上的天數</th>
                                                    <th style="width:20%"scope="col">近乎每天</th>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q4">覺得疲倦或活力不足</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q5">胃口極差或進食過量</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q6">不喜歡自己──覺得自己做得不好、對自己失望或有負家人期望</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <th style="width:20%" scope="col">  </th>
                                                    <th style="width:20%"scope="col">完全沒有</th>
                                                    <th style="width:20%"scope="col">幾天</th>
                                                    <th style="width:20%"scope="col">一半以上的天數</th>
                                                    <th style="width:20%"scope="col">近乎每天</th>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q7">難於集中精神做事，例如看報紙或看電視	</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr id="q8">
                                                        <th scope="row" >其他人反映你行動或說話遲緩；或者相反地，你比平常活動更多──坐立不安、停不下來</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="3"
                                                           
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="5"
                                                           
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr id="q9">
                                                        <th scope="row" >想到自己最好去死或者自殘</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                            </tbody>            
                                </table>
                                
                        </div>
                        <input type="submit" id="submit" value="提交" class="btn btn-primary btn-lg btn-block" />
                </form>
            </div>
          @endif
        </div>
    </section>
    @endif
    @if($locale == 'en')
        <section class="inner-page">
        <div class="container" data-aos="fade-up">
        @if($input == "PHQ-9")
                @if(0 <= $final_mark && $final_mark <= 27)
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">No psychological problems ^_^</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
                    @if(27 < $final_mark && $final_mark <=39 )
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">Pay attention to depression and maintain a normal mood.</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
                    @if(39 < $final_mark && $final_mark <=49 )
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">You have potential depression, please go to the hospital for a detailed examination.</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
                    @if(49 < $final_mark && $final_mark <=63 )
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">You have severe depression, please go to the hospital for treatment as soon as possible.</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
            @endif
            @if($input == "GAD-7")
                @if(0 <= $final_mark && $final_mark <= 21)
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">No psychological problems >_<</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
                    @if(21 < $final_mark && $final_mark <=28 )
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">Pay attention to anxiety and maintain a normal mood.</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
                    @if(28 < $final_mark && $final_mark <=39 )
                        <p>
                        The types of questionnaire: {{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">You have a potential anxiety disorder, please go to the hospital for a detailed examination.</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
                    @if(39 < $final_mark && $final_mark <=49 )
                        <p>
                        The types of questionnaire:{{ $input }}
                        </p>
                        <p>
                        <b style="font-size:22.5px;">You have severe anxiety problems, please go to the hospital for treatment as soon as possible.</b>
                        </p>
                        <p>
                        Final score: {{ $final_mark }}
                        </p>
                        <a href="{{ url('leisure-zone/questionnaire') }}" class="btn btn-primary btn-lg btn-block">Try Again</a>
                    @endif
            @endif
            @if($input == "" && $final_mark =="")
            <div id="form1">
                <form action="{{ url('leisure-zone/questionnaire') }}" method="post">
                    @csrf
                    <h2>The types of questionnaire</h2>
                        <select
                            class="selectStore"
                            id="store"
                            name="store"
                            onchange="change_QuestionEN()"
                            >
                            <option value="PHQ-9" >PHQ-9</option>
                            <option value="GAD-7" >GAD-7</option>
                            
                         </select>
                    <p id="QDescription">PHQ-9 questions are used to test and assess  <b style="font-size:22.5px;">depression</b>levels</p>
                         <div class="table-responsive-sm">
                                <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width:20%" scope="col">  </th>
                                                    <th style="width:20%"scope="col">Absolutely not</th>
                                                    <th style="width:20%"scope="col">Few days</th>
                                                    <th style="width:20%"scope="col">More than half of the days</th>
                                                    <th style="width:20%"scope="col">Almost every day</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableContent">
                                            <tr>
                                                    <th scope="row" id="q1">Feeling nervous, uneasy, or irritable</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td class="span2">
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q1"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q2">Feeling down, depressed, or hopeless</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q2"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row"id="q3">Difficulty falling asleep; waking up in the middle of the night or conversely sleeping too much</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q3"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                    
                                                    <th style="width:20%" scope="col">  </th>
                                                    <th style="width:20%"scope="col">Absolutely not</th>
                                                    <th style="width:20%"scope="col">Few days</th>
                                                    <th style="width:20%"scope="col">More than half of the days</th>
                                                    <th style="width:20%"scope="col">Almost every day</th>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q4">Feeling tired or low on energy</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q4"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q5">Extremely poor appetite or eating too much</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q5"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q6">Dislike yourself─feeling that you have not done well, are disappointed in yourself, or have failed your family’s expectations</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q6"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr>
                                                <th style="width:20%" scope="col">  </th>
                                                    <th style="width:20%"scope="col">Absolutely not</th>
                                                    <th style="width:20%"scope="col">Few days</th>
                                                    <th style="width:20%"scope="col">More than half of the days</th>
                                                    <th style="width:20%"scope="col">Almost every day</th>
                                                </tr>
                                                <tr>
                                                        <th scope="row" id="q7">Difficulty concentrating on tasks such as reading a newspaper or watching TV</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q7"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr id="q8">
                                                        <th scope="row" >Others report that you move or speak slowly; or, conversely, that you move more than usual—fidgeting and being unable to stop.</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="3"
                                                           
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="5"
                                                           
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q8"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                                <tr id="q9">
                                                        <th scope="row" >Thinking that it would be best to die or harm yourself</th>
                                                        <td > 
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="0"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >  
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="3"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td >
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="5"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                        <td>
                                                            <input
                                                            type="radio"
                                                            name="q9"
                                                            value="7"
                                                            
                                                            required
                                                            />
                                                        </td>
                                                </tr>
                                            </tbody>            
                                </table>
                                
                        </div>
                        <input type="submit" id="submit" value="Submit" class="btn btn-primary btn-lg btn-block" />
                </form>
            </div>
          @endif
        </div>
    </section>
    @endif
    <script src="{{ config('app.url') }}js/questionnaire.js"></script>
@endsection
