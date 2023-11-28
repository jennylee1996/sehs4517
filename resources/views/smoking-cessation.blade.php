@extends('layouts.app')
@section('content')
<style>
.tittle { 
    background: url({{config("app.url")}}img/sky1.jpg);
    
}
</style>
<link rel="stylesheet" href="{{ config('app.url') }}css/smoke.css" />
<?php
$locale = session('locale');
?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Smoking Cessation</li>
            </ol>
            <h2>Smoking Cessation</h2>
            @endif
            @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>如何戒菸</li>
            </ol>
            <h2>如何戒菸</h2>
            @endif
        </div>
    </section><!-- End Breadcrumbs -->
                <!-- ======= Blog Section ======= -->
    @if($locale == 'en')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="tittle">
            <h3>Pharmacotherapy</h3>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    Smokers often have insufficient understanding of the possible
                    withdrawal symptoms in the process of quitting. Once a smoker refrains
                    from smoking, the nicotine level inside his/her body will start to drop
                    gradually. The quitter may experience short-term discomfort such as
                    dizziness, headache, fatigue, poor concentration, dry mouth and throat,
                    cough and hunger. All these symptoms increase the chance of failure
                    in quit attempts, but most of these symptoms would subside in 2 or 3
                    weeks’ time.
                    </p>
                    
                    <p>
                        Studies showed that pharmacotherapies can alleviate withdrawal
                        symptoms and increase the success rate effectively. Besides, the
                        medication can also become an incentive for the quitter to attend
                        follow-up consultation on schedule. Common first-line supplementary
                        medication for smoking cessation nowadays can be broadly divided into
                        two categories: nicotine replacement therapy (NRT) and non-nicotine
                        medications (e.g. varenicline). According to the 2013 Cochrane Review,
                        both NRT and non-nicotine medications have been demonstrated to
                        improve the chance of successful quitting.This review also indicated
                        that: varenicline was more effective than nicotine patch (odds ratios
                        1.51; 95% credible interval 1.22 to 1.87), varenicline was more effective
                        than nicotine gum (odds ratios 1.72; 95% credible interval 1.38 to
                        2.13), and varenicline was more effective than “other” NRT (spray,
                        tablets, lozenges; odds ratios 1.42; 95% credible interval 1.12 to
                        1.79). However, combination use of NRT was shown to be as
                        effective as varenicline, and more effective than single types of NRT.
                    </p>

                    
                    <p>
                    We have adopted the World Health Organization (WHO) guidelines
                        on pharmacotherapy used in smoking cessation. Some updates in
                        pharmacotherapy have been made in this new edition
                    </p>
                    <br>
                    <div>
                        <p>
                            <b><i ></i>Nicotine Replacement Therapy</b>
                        </p>
                        <p>
                            Nicotine replacement therapy is an effective and safe aid to smoking
                            cessation. It is available in different types and formulae at dispensaries
                            or chain pharmacies with registered pharmacists. Doctors may, together
                            with the client, select the most suitable type of therapy. 
                        
                                Patients with severe angina and serious cardiac arrhythmias or
                            individuals suffering from an acute myocardial event in recent two weeks
                            should consult doctor / pharmacist before use. Pregnant or breastfeeding
                            women should be encouraged to quit with counselling first.
                    </p>
                    </div>
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center ">
                  <img src="{{ config('app.url') }}img/smoke1.jpg" alt="" >
                </div>
            </div>
           
            


           

        </div>
    </section><!-- End Blog Section -->
    @endif
    @if($locale == 'tc')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="tittle">
            <h3>藥物治療</h3>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    吸煙者很多時在戒煙的過程中，對可能出現的退癮徵狀並不了
                    解。當吸煙者停止吸煙，他 / 她體內尼古丁的水平就會開始逐漸
                    下降，身體未能即時適應，便可能會出現一些短暫不適的情況，
                    如頭暈、頭痛、疲倦、不能集中精神、喉乾舌燥、咳嗽和感覺
                    饑餓等。這些徵狀都會減低戒煙的成功機會，然而，大部份不
                    適的情況在兩至三個星期內便會減退。

                    </p>
                    
                    <p>
                    研究指出，使用戒煙藥物能舒緩退癮徵狀，有效提高戒煙的成
                    功率。此外，服用藥物亦能成為戒煙者準時覆診的動力。現時
                    常用的戒煙藥物可分為兩大類，分別是尼古丁替代療法（NRT）
                    和非尼古丁類藥物（如瓦倫尼克林）。根據 2013 年出版的
                    Cochrane	Review，這兩類戒煙藥物都已證實可以增強戒煙的
                    成功機率。 這份審視摘要亦指出：瓦倫尼克林比各種尼古丁
                    替代療法藥物有效，數據如下 :	瓦倫尼克林比戒煙貼有效（比數
                    比 1.51;	 95% 可靠區間 1.22 至 1.87）、瓦倫尼克林比戒煙香
                    口膠有效（比數比 1.72;	95% 可靠區間 1.38 至 2.13）、瓦倫
                    尼克林比其餘尼古丁替代療法藥物有效（戒煙噴劑、戒煙片劑、
                    戒煙糖：比數比 1.42;	 95% 可靠區間 1.12 至 1.79）。不過，
                    研究亦顯示，混合使用各種尼古丁替代療法藥物的效果可媲美
                    瓦倫尼克林，亦比使用任何單一種尼古丁替代療法藥物有效。
                    </p>

                    
                    <p>
                    我們採納世界衞生組織有關戒煙藥物治療之指引，在此新版本
                    中，已就這一方面作出更新。
                    </p>
                    <br>
                    <div>
                    <p><b><i ></i>尼古丁替代療法</b></p>                
                    <p>尼古丁替代療法是有效又安全的輔助戒煙方法，備有不同的種類
                    和配方，在一般有註冊藥劑師駐店的西藥房或連鎖式藥房有售。
                    醫生可與求診者一同選擇最合適的種類。詳情見以下數頁。
                    若求診者患有嚴重心絞痛及嚴重心律不正，或曾於最近兩星期出
                    現急性心臟病的情況，便要先諮詢醫生 / 藥劑師的意見，才可使
                    用戒煙藥物。而孕婦及餵哺母乳期間的婦女應先以輔導來戒煙。
                    </p>
                    </div>
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center ">
                  <img src="{{ config('app.url') }}img/smoke1.jpg" alt="" >
                </div>
            </div>
           
            
    

           

        </div>
    </section><!-- End Blog Section -->
    @endif
@endsection
