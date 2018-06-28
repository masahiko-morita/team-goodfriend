@extends('layouts.app')

@section('cover')

<div class="row">
        <span class="topic">
         <span class="syozai"><p>本社の所在地</p></span class>
   　　　 <div class="b"> 
   　　　
   　　　 　<p> 〒158-0083 青森県三戸郡三戸町桐萩031-5　タモハウス3F </br>
   　　　       ☎  123-456-789  </br>
     　　  　 FAX  03-123-98  </br>
   　　 　</div>
   　　 　
   　　 　<section class="access_box access_info_block" id="train">
		    	<h2> <img src="/images/train.jpg" alt="ACCESS"><span>電車でお越しの方<img src="/images/train.jpg" alt="ACCESS">　</span></h2>
			<div class="access_box_c">
				<p class="access_box_ttl">最寄り駅からのご案内</p>
				<ul class="access_box_txt">
					<p>青い森鉄道「三戸駅」　から徒歩15分　　＊地下通路からは直結</p> 
										or
					<p>タクシーで5分</p>
				</ul>
			</div>
		</section>
		
		<section class="access_box access_info_block" id="airplane">
			<h2><img src="/images/plane..png" alt="ACCESS"><span>海外からお越しの方</span><img src="/images/plane..png" alt="ACCESS"></h2>
			<div class="access_box_pc">
			    
				<div class="access_box_pc_list">
					<p class="access_box_ttl">～成田空港をご利用のお客様～</p>
					<dl class="acess_order">
						<dt class="access_order_ttl">成田エクスプレス</dt>
						<dd class="access_order_txt">成田空港 ― 東京駅<br>標準所要時間：60分</dd>
						<dd class="access_order_time"><a href="http://www.jreast.co.jp/nex/index.html" target="_blank">時刻表はこちら</a></dd> 
						
						<dt class="access_order_ttl">エアポートリムジンバス</dt>
						<dd class="access_order_txt">成田空港 ― 東京駅<br>標準所要時間：90分</dd>
						<dd class="access_order_time"><a href="../pdf/access/limousine_bus_narita.pdf" target="_blank"> 時刻表はこちら</a></dd>
					</dl>
				</div>
				
				<div class="access_box_pc_list">
					<dl class="access_order">
						<dt class="access_box_ttl">～羽田空港をご利用のお客様～</dt>
						<dt class="access_order_ttl">東京モノレール</dt>
						<dd class="access_order_txt">羽田空港 ― 浜松町 ― 東京駅<br>標準所要時間：35分</dd>
						<dd class="access_order_time sub_txt"><a href="http://www.tokyo-monorail.co.jp/" target="_blank">時刻表はこちら</a></dd>
						
						<dt class="access_order_ttl access_order_ttl02">エアポートリムジンバス</dt>
						<dd class="access_order_txt">羽田空港 ― 東京駅<br>標準所要時間：40分</dd>
						<dd class="access_order_time">  <a href="../pdf/access/limousine_bus_haneda.pdf" target="_blank">時刻表はこちら</a></dd> <br>
						
						
		　　　　<dd class="access_order_txt">東京駅で東北新幹線に乗り換えてね❤</dd>
					</dl>
				</div>
			</div>
		</section>
   　　
       　
   　   　<div class="visual">
       　<p> 会社の位置情報📌</p>
       　
       　<img src="/images/access.ipg" alt="ACCESS">
   　　    </div>
   　　    
   　　    
   　　    <section id="news">
                    <h2>お知らせ</h2>
                    <ul>
                        <li>
                            <span>2016/08/31</span>
                            <a href="#">　大阪支社立ち上げました！　</a>
                        </li>
                        <li>
                            <span>2016/08/24</span>
                            <a href="#">　バリ島支社リニューアル！　</a>
                        </li>
                    </ul>
                </section>
 
        </span>
        <aside class= "col-md-offset-6">
        </aside>
        
        
        
        
   </span>
    
    
</div>


@endsection

@section('content')

@endsection
