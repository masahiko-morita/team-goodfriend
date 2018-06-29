@extends('layouts.haru')

@section('cover')

<div class='container'>
<div class="row">
        <span class="text-center">
         <h1>役員紹介</h1>
        </span>
        <aside class= "col-md-offset-6">
        </aside>
        
</div>

<span class="text-center">

 <ul class="nav nav-tabs">
   <li><a href="/history">年表</a></li>
   <li><a href="/members">役員紹介</a></li>
   <li><a href="photos">いいともQuiz</a></li>
 </ul>

</span>


@endsection

@section('content')
<div class='row'>
<div class="col-md-offset-6 col-md-6">  <br></div>


<div class='row text-center'>
    
<div class="col-sm-5" ><h2>代表取締役</h2><br><img src='{{ secure_asset("images/mao.jpg")}}' width='180px' height='180px'>
<br><h3>奥貫真緒</h3><br><p>われらがスクラムマスター。彼女のラクロスボールは常に転がり皆の注目を得ている。「今笑い取ろうとしたわけじゃない」が口癖。
真緒の高熱事件以来役員たちは彼女のいない「いいとも」には全く締まりがなくなることを知った。</p> </div> 

<div class="col-sm-2"></div>

<div class="col-sm-5"><h2>CFO</h2><br><img src='{{ secure_asset("images/tamo.jpg")}}' width='180px' height='180px'>
<br><h3>森田匡彦</h3><br><p>彼がいなければ「いいとも」は生まれ得なかった。<br>髪の毛をいじるという行為によって才能を発揮する様子は常軌を逸したものがある。打率に誰よりも厳しい。<br>.......なんで？</p> </div> 


</div>

<div class='row text-center'>
    
<div class="col-sm-5" ><h2>取締役</h2><br><img src='{{ secure_asset("images/chaki.jpg")}}' width='180px' height='180px'>
<br><h3>小泉咲子</h3><br><p>ちゃきこでおなじみの小泉氏。同じく取締役の石橋氏とは結婚と離婚を繰り返している。かのちゃきおの涙事件の張本人。なお、ちゃきおと呼ぶのは元夫のみ。</p> </div> 

<div class="col-sm-2"></div>

<div class="col-sm-5"><h2>取締役</h2><br><img src='{{ secure_asset("images/momo.jpg")}}' width='180px' height='180px'>
<br><h3>山根百絵</h3><br><p>彼女の声はハワイの風。この思いには役員全員が同意するであろう。</p> </div> 


</div>


<div class='row text-center'>
    
<div class="col-sm-5" ><h2>取締役</h2><br><img src='{{ secure_asset("images/daiki.jpg")}}' width='180px' height='180px'>
<br><h3>石橋大輝</h3><br><p>われらがスクラムマスター。彼女のラクロスボールは常に転がり皆の注目を得ている。「今笑い取ろうとしたわけじゃない」が口癖。
真緒の高熱事件以来役員たちは彼女のいない「いいとも」には全く締まりがなくなることを知った。</p> </div> 

<div class="col-sm-2"></div>

<div class="col-sm-5"><h2>取締役</h2><br><img src='{{ secure_asset("images/haruna.jpg")}}' width='180px' height='180px'>
<br><h3>西 遥奈</h3><br><p>彼がいなければ「いいとも」は生まれ得なかった。<br>髪の毛をいじるという行為によって才能を発揮する様子は常軌を逸したものがある。打率に誰よりも厳しい。<br>.......なんで？</p> </div> 


</div>









@endsection 

