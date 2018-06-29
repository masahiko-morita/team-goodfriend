@extends('layouts.app')

@section('cover')
<?php
    date_default_timezone_set('Asia/Tokyo');
    $now = date("Y/m/d H:i:s"); 
?>

<ul class="row">
      <h3><?php print $now; ?>現在</h3>
          <li class="col-lg-4 col-md-6">
            <div class="netWorkItemInner">
              <a href="https://dai-original-service.herokuapp.com/" target="_blank">
              <div class="logo">
                <img src="/images/logo1.png" alt="（株）Daiki Free Market">
              </div>
              <div class="address">日本</div>
              <h3 class="name">（株）Daiki Free Market</h3>
              <p class="description">C2C事業/ネットフリーマーケット事業</p>
              <div class="button buttonIcon modItem">
            </a>
              </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="netWorkItemInner">
              <div class="logo">
                <a href="http://www.recruitjobs.co.jp/" target="_blank">  
                <img src="/images/logo2.jpg" alt="（株）Eatable">
              </div>
              <div class="address">日本</div>
              <h3 class="name">（株）Eatable</h3>
              <p class="description">レストラン情報を提供、評価付けする事業</p>
              <div class="button buttonIcon modItem">
                </a>
              </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="netWorkItemInner">
              <a href="http://www.recruit-lifestyle.co.jp/" target="_blank">
              <div class="logo">
                <img src="/images/logo3.jpg" alt="（株）Daiki Free Market">
              </div>
              <div class="address">日本</div>
              <h3 class="name">（株）Travelist</h3>
              <p class="description">旅行などのシーンでカスタマーの行動を支援するサービス</p>
              <div class="button buttonIcon modItem">
                </a>
              </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="netWorkItemInner">
              <div class="logo">
                <a href="http://www.recruit-mp.co.jp/" target="_blank">  
                <img src="/images/logo3.png" alt="（株）Cupid">
              </div>
              <div class="address">日本</div>
              <h3 class="name">（株）Cupid</h3>
              <p class="description">ライフイベントにおける、結婚などのサービスを展開</p>
              <div class="button buttonIcon modItem">
                </a>
              </div>
            </div>
          </li>
          <li class="col-lg-4 col-md-6">
            <div class="netWorkItemInner">
              <div class="logo">
                <a href="https://questionposts.herokuapp.com/" target="_blank">  
                <img src="/images/logo4.png" alt="（株）Questionposts">
              </div>
              <div class="address">日本</div>
              <h3 class="name">（株）Questionposts</h3>
              <p class="description">いいともグループにおいて、クライアントの集客ソリューションから、Webマーケティング、メディアの制作・流通・宣伝、カスタマーサポートまでを担当</p>
              <div class="button buttonIcon modItem">
                </a>
              </div>
            </div>
          </li>
</ul>
        
@endsection

@section('content')


@endcontent