@extends('layouts.app')

@section('cover')

<div class='container'>
<div class="row">
        <span class="text-center">
         <h1>軌跡　2018～</h1>
        </span>
        <aside class= "col-md-offset-6">
        </aside>
        
</div>

<span class="text-center">

 <ul class="nav nav-tabs">
   <li><a href="/history">年表</a></li>
   <li><a href="photos">ギャラリー</a></li>
 </ul>

</span>



@endsection

@section('content')

   <ul class="cbp_tmtimeline">
	<li>
		<time class="cbp_tmtime" datetime="2018-5-7"><span>May 7</span> </time>
		<div class="cbp_tmicon cbp_tmicon-phone"></div>
		<div class="cbp_tmlabel">
			<h2>初めての出会い</h2>
			<p>コーディングトレーニング初日、自分たちでチームを組むのは容易ではなかった。まだお互いがお互いを知らないままいいともは始まった。</p>
		</div>
	</li>
	<li>
		<time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>9</span> </time>
		<div class="cbp_tmicon cbp_tmicon-screen"></div>
		<div class="cbp_tmlabel">
			<h2>ちゃきおの涙</h2>
			<p>Sprint1初めてのRetrospectiveの日、これまでの不安が爆発しちゃきおが泣いた。メンバーたちは彼女の思いを汲めなかったことを反省しチームとしての自覚を持ち始めた。</p>
		</div>
	</li>
	<li>
		<time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>15</span> </time>
		<div class="cbp_tmicon cbp_tmicon-mail"></div>
		<div class="cbp_tmlabel">
			<h2>スカイエアねぎ</h2>
			<p>初めてのチーム呑み。場所はねぎ屋。深谷ネギをスカイエアねぎと聞き間違えたももちゃんに全員が爆笑。</p>
		</div>
	</li>
	<li>
		<time class="cbp_tmtime" datetime="2013-04-15 13:15"><span>June 22</span></time>
		<div class="cbp_tmicon cbp_tmicon-phone"></div>
		<div class="cbp_tmlabel">
			<h2>こがっちと呼んだ日</h2>
			<p>私たちの心のメンターこがわさんがこがっちと呼んで下さいと言ってくれた。シンプルに嬉しかった。</p>
		</div>
	</li>
	<li>
		<time class="cbp_tmtime" datetime="2013-04-16 21:30"><span>22</span> </time>
		<div class="cbp_tmicon cbp_tmicon-earth"></div>
		<div class="cbp_tmlabel">
			<h2>〇まきん</h2>
			<p>「今日は花金だ」とはしゃぐみんな。「たまきんだ」と呟くだいき。</p>
		</div>
	</li>
</ul>
</div>






@endsection