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
{!! Form::open(['url' => '/upload', 'method' => 'post', 'files' => true]) !!}

{{--成功時のメッセージ--}}
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
{{-- エラーメッセージ --}}
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif

<div class="form-group">
    @if ($user->avatar_filename)
        <p>
            <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" />
        </p>
    @endif
    {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
    {!! Form::file('file') !!}
</div>

<div class="form-group">
    {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
</div>
{!! Form::close() !!}









</div>
@endsection