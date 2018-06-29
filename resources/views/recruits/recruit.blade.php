@extends('layouts.app')

@section('content')

<div id= "container-recruit">
    <div id="recruit-contents" class="max" >
        <h1 class="rf-title-large">採用情報</h1>
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
            だから君は行くんだ　どこまでも…
        </p>
    </span>
    
    <div id="links" class="cf">
        <hr>
        <a href="/graduate">
            <div class="banner banner1 fadein scrollin">
                <div class="recruit-text">
                <p>新卒採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/career">
            <div class="banner banner2 fadein scrollin">
                <div class="recruit-text">
                <p>キャリア採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/mba">
            <div class="banner banner3 fadein scrollin">
                <div class="recruit-text">
                <p>MBA採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/special">
            <div class="banner banner4 fadein scrollin">
                <div class="recruit-text">
                <p>特殊採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/grobal">
            <div class="banner banner5 fadein scrollin">
                <div class="recruit-text">
                <p>グローバル採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/agreement">
            <div class="banner banner6 fadein scrollin">
                <div class="recruit-text">
                <p>契約社員採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
    </div>
</div>


@endsection
