@extends('layouts.haru')

@section('cover')

<div class='container'>
<div class="row">
        <span class="text-center">
         <h1>Quiz</h1>
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
<div class='container' 'text-center'>
    <div>
      <p><br></p>
    </div>
<div class='quiztitle'>
<h2 title>1 いいとも社員が詰んだ時に使う言葉は？</h2><br>
<form method="get" action="{{url('answer')}}">
    
   <p><a href="/correct" class='bt-samp36'>おわ　終わりの国</a><br></p>
   <p><a href="/incorrect" class='bt-samp36'>でんじゃらすじーさん</a><br></p>
   <p><a href="/incorrect"class='bt-samp36'>カビゴン</a><br></p>
</form>

</div>

<div class='quiztitle'>
<h2 title>2 森田氏のファーストネームは？</h2><br>
<form method="get" action="{{url('answer')}}">
    
    <p><a href="/correct" class='bt-samp36'>まさひこ</a><br></p>
   <p><a href="/incorrect" class='bt-samp36'>まさたか</a><br></p>
   <p><a href="/incorrect"class='bt-samp36'>まさくに</a><br></p>
   <p><a href="/correct" class='bt-samp36'>かずよし</a><br></p>
</form>

</div>

<div class='quiztitle'>
<h2 title>3 Kyleの言い方にクセがあったのは？</h2 title><br>
<form method="get" action="{{url('answer')}}">
    
    <p><a href="/incorrect" class='bt-samp36'>ひろひこ</a><br></p>
   <p><a href="/incorrect" class='bt-samp36'>へろく</a><br></p>
   <p><a href="/correct"class='bt-samp36'>ひろし</a><br></p>
   <p><a href="/incorrect" class='bt-samp36'>ひろみ</a><br></p>
</form>

</div>


 

@endsection