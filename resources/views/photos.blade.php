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
<div class='container'>
    <ul>
        
       <li><img class="logo" src="{{ secure_asset('images/negi.jpg') }}" alt="negi"></li>
</ul>



</div>
</div>
@endsection