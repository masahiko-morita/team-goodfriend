@extends('layouts.app')

@section('content')

<main id= "container">
    <div id="newgrads-contents" class="max" >
        <h1 class="rf-title-large">採用情報</h1>
        </div>
    
    <!--content-->
    <div id="top">
        <div class="top1">
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
        ?><h1>君が世界を変える</h1>
        </div>
    </div>
    <div id="links" class="cf">
        <a href="/graduate">
            <div class="banner banner1 fadein scrollin">
                <div class="recruit-text">
                <p>新卒採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/recruit/carrer/">
            <div class="banner banner2 fadein scrollin">
                <div class="recruit-text">
                <p>キャリア採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/recruit/mba/">
            <div class="banner banner3 fadein scrollin">
                <div class="recruit-text">
                <p>MBA採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/recruit/specialist/">
            <div class="banner banner4 fadein scrollin">
                <div class="recruit-text">
                <p>特殊採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/recruit/goodfriend/">
            <div class="banner banner5 fadein scrollin">
                <div class="recruit-text">
                <p>グローバル採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
        <a href="/recruit/arubaito/">
            <div class="banner banner6 fadein scrollin">
                <div class="recruit-text">
                <p>契約社員採用</p>
                <div class="rButtonWhite">> 詳しく見る</div>
                </div>
            </div>
        </a>
    </div>
    </div>
</div>


@endsection
