@extends('layouts.template')
@section('content')
<style>
        .album-background{
            background: #f8f9fa !important;
            padding: 50px 50px 200px 50px;
        }
        .card-img-top{
            max-width: 100%;
            height: auto;
        }
        .card-body{
            padding: 5px 20px 10px 20px;
        }
        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>
            
    <div class="col-md-12 album-background">
        @foreach($albums as $album)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top img-fluid" src="{{ asset('storage/' . $album->image)}}" alt="Card image cap">
                    <div class="card-body">
                    <h4>{{$album->title}}</h4>
                    <p class="card-text">{{$album->description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href='{{url("photos/$album->id")}}' class="btn btn-default">View</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
        @endforeach
    </div>
    <div class="clearfix"> </div>


@endsection