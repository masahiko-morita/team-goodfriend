@extends('layouts.app')

@section('content')

<div id= "container-recruit">
    <div id="recruit-contents" class="max">
      <h1 class="rf-title-large">新卒採用ページ</h1>
    </div>
    <hr>
    <!--content-->
     <span id="recruit-top">
        <?php
            $image_rand = array(
            "images/momo.jpg",
            "images/mao.jpg",
            "images/tamo.jpg",
            "images/chaki.jpg",
            "images/haruna.jpg",
            "images/daiki.jpg",
        );
 
        $image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];
        echo '<img src="'.$image_rand.'" alt="">';
        ?>
    </span>
    <span id="recruit-message">
        <h1>君が世界を変える</h1> 
        <p>
            何が君の幸せ　何をして喜ぶ<br>
            分からないまま終わる<br>
            そんなのは嫌だ<br>
            今を生きることで　熱い心燃える<br> 
            だから君は行くんだ　どこまでも… <br>
  
        <a href="" class="btn btn-success btn-lg active">ENTRY</a>
        <a href="" class="btn btn-danger btn-lg active">MYPAGE</a>
        </p>
    </span>
    
    
    <div class="recruit-detail">
          <hr>
          <h1 class="Head_title">
            <span>スペシャリスト</span>
            <span>Webマーケティングコース</span>
          </h1>
          <div class="explain">
            <p>いいともの持つあらゆる事業領域・プロダクトのマーケティング戦略を担当し、カスタマーの心理と向き合い、様々なマーケティング戦略を立て実行していきます。</p>
          </div>
    </div>
  　
    <div class="Sub">
        <div class="Sub-title"><p>配属職種</p></div>
            <div class="explain">
                <p>マーケティングのみ</p>
            </div>
        <div class="Sub-title"><p>入社時研修</p></div>
            <div class="explain">
                <p>昨年実施例：<br>
                開発研修、ビジネス企画研修、社会人マナー研修。<br>
                入社後も配属先によって実施予定。</p>
            </div>
        <div class="Sub-title"><p>募集対象</p></div>
            <div class="explain">
                  <p>・2050年度までに入社できること<br>
                     ・45歳以下であること。幹部(森田,西)のくだらないボケに対応できること。</p>
            </div>
        <div class="Sub-title">
          <p>応募必須条件(スキル・経験・志向など)</p>
        </div>
            <div class="explain">
            <p>・タモリの行動や感情の動きを科学することに興味関心が高い方<br>
            </div>
        <div class="Sub-title"><p>望ましい条件</p></div>
            <div class="explain">
                  <p>・プログラミングスキル（Java、Python、Ruby、PHP等）<br>
                    ・お笑い動画一日50本以上見たという経験<br>
                    ・地方トークについていくことができた経験</p>
            </div>
        <div class="Sub-title"><p>初任給</p></div>
        <div class="explain">
          <p>2018年度見込み<br>
            月給：50万1110円（基準給：50万円＋グレード手当：1110円＋住宅手当: 10万円まで）+賞与<br>
            初年度　年収例613万円　※上記月給の場合<br>
            (短大・専門・高専・大学・大学院 卒業見込みまたは卒業の方)</p>
            <p>・グレード手当（1110円）は月当たり45時間相当分の超過勤務手当<br>
            ※グレード手当：職務に基づいて決定されるミッショングレードによって決定されるもの</p>
            <p>・「社員給与規程」に基づき割増手当（深夜勤務手当、休日出勤手当、超過勤務手当および追加割増手当）を支給</p>
        </div>
        <div class="Sub-title"><p>賞与</p></div>
        <div class="explain">
          <p>年2回（6月、12月） ※初年度支給は入社半年後の1回のみ</p>
        </div>
        <div class="Sub-title"><p>勤務時間</p></div>
        <div class="explain">
          <p>フレックスタイム制 ※１日の標準労働時間は4時間としますが、出・退勤時間は、自由裁量に委ねていまぁぁぁぁぁぁぁぁぁぁす</p>
        </div>
        <div class="Sub-title"><p>休日休暇</p></div>
        <div class="explain">
          <p> 休日<br>
                年間休日200日<br>
                週休4日以上（土日祝　※事業部門により年数回土曜出社有、当社カレンダーによる）</p>
                <p>○ 休暇<br>
                ありません</p>
                <p>◆ 年次有給休暇<br>
                初年度50日付与 （2018年4月入社の場合）<br>
                以後毎年勤続年数に応じた日数を付与（最大20日）</p>
                <p>◆ サンクス休暇 日頃支えてくれる家族に対し、感謝の気持ちを示す場としての休暇。<br>
                従業員本人や家族の誕生日、結婚記念日、もしくはこれらに準ずる記念日に 年1回休暇を取得可能。<br>
                休暇を取得する際、家族の方へサンクスファミリーギフト(手当)を支給。</p>
        </div>
        <div class="Sub-title"><p>勤務地</p></div>
        <div class="explain">
          <p>好きな場所でどうぞ</p>
        </div>
        <div class="Sub-title"><p>諸手当</p></div>
        <div class="explain">
             <p>超過時間が45時間を超えた場合は追加割増手当、深夜・休日勤務手当、通勤交通費(当社規定による)ほか</p>
        </div>
    </div>
    
    
</div>


@endsection
