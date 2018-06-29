@extends('layouts.app')

@section('cover')

<div class='container-rinen'>
        <br>
        <div class="text-center">
        <h1>Philosophy</h1>
        </div>
    <hr>
    <div class='philosophy-content'>
        <h1 class="philo-Title1">
            <strong>経営理念</strong>
        </h1>  
        <p class='philo-Title2'>
        いいともグループ経営理念の原型である株式会社いいともの経営理念は、2018年に制定。<br>
        その後ちゃきおの涙事件後の2018年5月に初めての見直しを行いました。<br>
        そして、2018年5月、新経営体制後の理念について議論を重ね、<br>
        創業以来大事にしてきた「21世紀を代表する会社を創る」にこだわりながら、<br>
        より「社会からの期待に応える」という決意を込め、現在のグループ経営理念になりました。
        </p>
        <hr>
        <div class='philosophy-text'>
            <h1>いいともグループ経営理念</h1>
            <h2>【Philosophy】</h2>
            <p>「21世紀を代表する会社を創る」<br>
            ーーーーー大切なこと、大切にします。</p> 
            
            <h2>【Mission Statement】</h2>
            <p>社会にとって、地球にとって。<br>
            そして、あなたにとって何が大切かを考え、行動します。</p>
        </div>
        <hr>
        <div class="modText">
            <h1>「あなたの心に従おう」</h1><br>
            <p>
                物質的な豊かさが本当の豊かさではない。<br>
                ひとりひとりが自分で自分のお笑いスタイルを選ぶことが出来る世の中。<br>
                十人十色、百人百色の自己実現が可能な世の中こそ、豊かな世の中であると、いいともは考えています。<br>
                自分の心に従って行動を起こすとき、<br>
                いいともはあなたを支える存在でありたいという思いを込めています。
            </p>
        </div>
    </div>
    <div class= 'rinen-picture'> 
        <h2>一緒に働こう<img src="{{ secure_asset("images/tamotamo.jpg") }}" alt="sangrasu"><br></h2><br>
    </div>
    <div class='zenninn'>
        <img border="0" src="/images/rien.picture.png" width="800" height="400" alt="">
    </div> 
</div>    

<footer id="footer">
      <ul class="row">
            <div>
            <a href="/rinen/">企業理念</a>
            <a href="/history/">軌跡</a>
            <a href="/recruit/">採用情報</a> 
            <a href="/access/">アクセス</a>
            <a href="/question/">お問い合わせ</a>
            </div>
     </ul>
</footer>

@endsection

@section('content')


@endsection