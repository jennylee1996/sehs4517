@extends('layouts.app')
@section('content')
<style>
    img {

    transform: scale(0.5);
}
    </style>
<?php
$locale = session('locale');
?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

        @if($locale == 'en')
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>How to Build Self Confidence</li>
            </ol>
            <h2>How to Build Self Confidence</h2>
        @endif
        @if($locale == 'tc')
            <ol>
                <li><a href="{{ url('/') }}">主頁</a></li>
                <li>如何建立自信</li>
            </ol>
            <h2>如何建立自信</h2>
        @endif
        </div>
    </section><!-- End Breadcrumbs -->
    <!-- =======  Tabs Section ======= -->
    @if($locale == 'en')
    <section class="inner-page">
    <div class="container">
    <h3>How to Build Self Confidence</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
          
                    <br>
                    <p>
                        When faced with a big challenge where potential failure seems to lurk at every corner, maybe you've heard this advice before: Be more confident! And most likely, this is what you think when you hear it: If only it were that simple! But what is confidence?
                    </p>
                    <p>
                    

Take the belief that you are valuable, worthwhile, and capable, also known as self-esteem, add in the optimism that comes when you are certain of your abilities, and then empowered by these, act courageously to face a challenge head on. This is confidence. It turns thoughts into action.
                    </p>
                    <p>
                        So where does confidence even come from? There are several factors that impact confidence. One: what you're born with, such as your genes, which will impact things like the balance of neurochemicals in your brain. Two: how you're treated. This includes the social pressures of your environment. And three: the part you have control over, the choices you make, the risks you take, and how you think about and respond to challenges and setbacks. It isn't possible to completely untangle these three factors, but the personal choices we make certainly play a major role in confidence development. So, by keeping in mind a few practical tips, we do actually have the power to cultivate our own confidence.
                    </p>
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ config('app.url') }}img/Confidence1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
    <h3>3 Tips to Build Self Confidence</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">                
                <div class="col-lg-6 order-1 order-lg-1 text-center">
                  <img src="{{ config('app.url') }}img/Confidence2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0">
                    <p>
                    Tip 1: a quick fix. There are a few tricks that can give you an immediate confidence boost in the short term. Picture your success when you're beginning a difficult task. Something as simple as listening to music with deep bass—it can promote feelings of power. You can even strike a powerful pose, or give yourself a pep talk.
                    </p>
                    <p>
                    Tip 2: believe in your ability to improve. If you're looking for a long-term change, consider the way you think about your abilities and talents. Do you think they are fixed at birth? Or that they can be developed, like a muscle? These beliefs matter because they can influence how you act when you're faced with setbacks. If you have a fixed mindset, meaning that you think your talents are locked in place, you might give up, assuming you've discovered something you're not very good at. But if you have a growth mindset and think your abilities can improve, a challenge is an opportunity to learn and grow. Neuroscience supports the growth mindset. The connections in your brain do get stronger and grow with study and practice. It also turns out, on average, people who have a growth mindset are more successful, getting better grades, and doing better in the face of challenges.
                    </p>
                    <p>
                    Tip 3: practice failure. Face it, you're going to fail sometimes. Everyone does. J.K. Rowling was rejected by 12 different publishers before one picked up Harry Potter. The Wright Brothers built on history's failed attempts at flight, including some of their own, before designing a successful airplane. Studies show that those who fail regularly and keep trying anyway are better equipped to respond to challenges and setbacks in a constructive way. They learn how to try different strategies, ask others for advice, and persevere.
                    </p>
                </div>
            

            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="tab-pane" id="tab-4">
            <div class="row">
                
                    <p>So, think of a challenge you want to take on, realize it's not going to be easy, accept that you'll make mistakes, and be kind to yourself when you do. Give yourself a pep talk, stand up, and go for it! The excitement you'll feel knowing that whatever the result, you'll have gained greater knowledge and understanding—this is confidence.</p>
                
            </div>
        </div>
    </div>
    </section>
    @endif
    
    @if($locale == 'tc')
    <section class="inner-page">
    <div class="container">
    <h3>如何建立自信</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                    <p>
                    在面對一個潛在失敗似乎躲在各個角落的巨大挑戰時，你以前或許聽過這建議：有自信點!而這很可能是你聽到這建議時的想法：有那麼簡單就好了!但什麼是自信？
                    </p>
                    <p>
                    相信你是有價值、值得且有能力的，那又稱「自尊」，把當你肯定自己能力時會出現的樂觀含括進去，接著自這些信念得到力量，勇敢地迎頭面對挑戰。這就是自信。自信將想法變成行動。
                    </p>
                    <p>
                    那自信究竟從哪來呢？有幾個影響信心的因素。一：與生俱來的事物，例如你的基因，基因會影響像是你腦中神經化學物質的平衡那些東西。二：你被如何對待。這包含你所處環境的社會壓力。還有第三：你能控制的部分，你所作的選擇、你冒的險，以及你對挑戰和挫折的想法及應對。不可能完全解開這三種因素，但我們作的個人選擇在自信發展中絕對扮演很重要的角色。所以，藉由記住幾個實用技巧，我們確實擁有培養自身信心的能力。
                    </p>
                </div>
            
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ config('app.url') }}img/Confidence1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
    <h3>3個技巧去建立自信</h3>
        <div class="tab-pane" id="tab-4">
            <div class="row">                
                <div class="col-lg-6 order-1 order-lg-1 text-center">
                  <img src="{{ config('app.url') }}img/Confidence2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 order-2 order-lg-2 mt-3 mt-lg-0">
                    <p>
                    技巧一：快速解方。有幾個能短暫讓你自信立刻提升的方法。在你開始進行一項困難的任務時，想像自己的成功。一些像聽重低音音樂那樣簡單的事－－這可以激起充滿力量的感覺。你甚至可以擺一個有力量的姿勢，或給自己一段鼓勵的話。
                    </p>
                    <p>
                    技巧二：相信自己進步的能力。如果你在追求一個長期的改變，思考一下你看待自己能力和天賦的方式。你覺得它們是先天註定的嗎？還是它們可以被養成，像肌肉一樣？這些看法很重要，因為它們可以影響你在面對挫折時的舉動。如果你有固定型思維模式，代表你認為你的天賦是固定的，你可能會放棄，假定自己是發現某件不太在行的事。但如果你有成長型思維模式，且認為你的能力是可以改進的，挑戰便是學習和成長的機會。神經科學證實這種成長型思維模式。你大腦中的連結確實會隨學習和練習變得更強並成長。另外結果也證明，平均來說，擁有成長型思維模式的人，在面對挑戰時會比較成功、獲得較佳成績，且表現得比較好。
                    </p>
                    <p>
                    技巧三：練習失敗。面對吧，你有時會失敗。每個人都會。J.K. 羅琳在一間出版商買下《哈利波特》前曾被十二間不同出版商拒絕。萊特兄弟的成功是建立於史上失敗的飛行嘗試，包含他們自己的失敗上，在設計出一架成功的飛機前。研究顯示那些經常失敗卻無論如何都會繼續嘗試的人，比較能夠以有建設性的方法對挑戰和挫折作出反應。他們學會如何嘗試不同辦法、詢問他人意見，以及堅持下去。
                    </p>
                </div>
            

            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="tab-pane" id="tab-4">
            <div class="row">
                
                    <p>那麼，想一個你想接受的挑戰，了解這不會太容易、接受你將會犯錯，並在你真的犯錯時對自己寬容些。給自己一段鼓勵的話、站起來，然後就去做吧!你將感受到的興奮，知道不管結果是什麼，你都將得到更淵博的知識和體悟的那種興奮之情－－這就是自信。</p>
                
            </div>
        </div>
    </div>
    </section>
    @endif
@endsection

