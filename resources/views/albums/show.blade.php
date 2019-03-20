@extends('layouts.app2')
@section('content')
<h1>{{$album->name}}</h1>
<a  class="button secondary" href="/albums">Go back</a>
<a  class="button " href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
<hr>


@if(count($album->photos)>0)
<?php 
$colcount =count($album->photos);
$i = 1;
?>
<div id="photos">
<div class="row text-center">
@foreach($album->photos as $photo)
@if($i == $colcount)
<div class='medium-4 columns end'>
<a href="/photos/{{$photo->id}}">
<img class="thumbnail" style="width:150px" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
alt="{{$photo->title}}">
</a>
<br>
<h4>{{$photo->title}}</h4>
@else
<div class='medium-4 columns '>
<a href="/photos/{{$photo->id}}">
<img class="thumbnail" style="width:150px" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
alt="{{$photo->title}}">
</a>
<br>
<h4>{{$photo->title}}</h4>
@endif
@if($i % 3 == 0)
</div></div></div class="row text-center"> 
@else
</div>

@endif
<?php $i++; ?>
@endforeach
</div>
</div>
@else
<p>No Photo to display</p>
@endif
@endsection