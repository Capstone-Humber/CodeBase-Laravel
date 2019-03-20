@extends('layouts.admin')
@section('content')
    <div class="jumbotron">
    <h1 align="center" style="font-size:100px;font-family:Aclonica">{{$post->title}}</h1>
    </div>
    <div class="container">
        <p><h3>{!!$post->body!!}</h3></p>
    </div>

    <div class="container">

</div>
@endsection
