@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="jumbotron">
        @if(!Auth::guest())
        <h1>Create Blog</h1>
        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'required' => 'required','placeholder' => 'Body Text'])}}
            </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        @else
        <h1>Not Authorized!!!</h1>
        <h1>Login to Create Post</h1>
        @endif    
    </div></div>
@endsection
