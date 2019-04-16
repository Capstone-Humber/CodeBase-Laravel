@extends('layouts.admin.template');

@section('content')
<h3>{{$album->title}}</h3>
<p>{{$album->description}}</p>
<form method="post" action="{{ url('admin/album', $album->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" class="btn btn-default" value="Delete"/>
</form>
<a class="btn btn-default" href='{{url("admin/photo-gallary/create/$album->id")}}'>Insert Image</a>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Image Name</th>
        <th scope="col">Image Description</th>
        <th scope="col">Image </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($photo_galary as $item)
        <tr>
            <th scope="row">{{$item->image_title}}</th>
            <td>{{$item->image_description}}</td>
            <td><div class="col-md-4"><img class="thumbnail img-responsive" src="{{asset('storage/' .$item->image)}}"/></div></td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection