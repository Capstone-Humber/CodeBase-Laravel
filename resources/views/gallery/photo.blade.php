@extends('layouts.template')

@section('page_css')
<link rel="stylesheet" href="{{URL::asset('css/photo-galary.css')}}" type="text/css" media="screen" charset="utf-8">
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="gallery">
	<div class="container">
		<div class="gallery-top heading">
			<h3>GALLERY</h3>
		</div>
		<section>
            <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
				@foreach($galleries as $gallery)
                <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="{{asset($gallery->image->original)}}" data-src="{{asset($gallery->image->original)}}" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="{{asset($gallery->image->original)}}">
                    </a>
                </li>
				@endforeach
				<div class="clearfix"> </div>
            </ul>
            
		</section>
	</div>
</div>
<script>
        $(document).ready(function(){
            $('#lightgallery').lightGallery(); 
        });
    </script>
@endsection
