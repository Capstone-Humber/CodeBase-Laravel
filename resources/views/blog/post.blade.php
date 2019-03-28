@extends('layouts.template')
@section('content')

    <div class="single">
        <div class="container">
            <div class="single-top">
                <a href="#"><img class="img-responsive" src="{{ asset($post->featured_image->original) }}" alt=" "></a>
                <div class=" single-grid">
                    <h4>{{$post->title}}</h4>
                    <ul class="blog-ic">
                        <li><a href="#"><span> <i class="glyphicon glyphicon-user"> </i>{{$post->user->name}}</span>
                            </a></li>
                        <li><span><i class="glyphicon glyphicon-time"> </i>{{$post->created_at->diffForHumans()}}</span>
                        </li>
                        {{--  <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li> --}}
                    </ul>
                    <p>{!!$post->content!!}</p>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="post-tags">
                            <span class="fa fa-tags">Tags :</span>
                            @foreach($post->tags as $tag)
                                <span>{{$tag->name}},</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection