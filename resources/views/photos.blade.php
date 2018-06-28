@extends('layouts.app')

@section('cover')

<div class='container'>
<div class="row">
        <span class="text-center">
         <h1>Gallery</h1>
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
<div class='container'>
    <div class='text-center'>
      <p><br>*無断転用はお控えください</p>
    </div>
    
        
       <img class="logo" src="{{ secure_asset('images/negi.jpg') }}" alt="negi">
       <img class="logo" src="{{ secure_asset('images/karaage.jpg') }}" alt="karaage">
       



</div>
</div>
@endsection