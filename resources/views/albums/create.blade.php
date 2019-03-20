@extends('layouts.app2')
@section('content')

@if(!Auth::guest())
<h3>Create Album</h3>
{!!Form::open(['action'=>'AlbumsController@store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
{{Form::text('name','',['placeholder'=>'Album Name'])}}
{{Form::textarea('description','',['placeholder'=>'Album Description'])}}
{{Form::file('cover_image')}}
{{Form::submit('submit')}}
{!!Form::close()!!}

@else
<h1>Not Authorized</h1>
<h1>Login to Create album</h2>
@endif

@endsection
