@extends('layouts.template')
@section('content')


@foreach($featured_posts as $featured_post)
<!----article_title------>
<div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="{{url('blog/post/'.$featured_post->id)}}" target="_self"><img class="img-responsive"
                                                                   src="{{asset($featured_post->featured_image->medium)}}" alt="feature-top">
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag purple">{{$post_category->name}}</span>

                <div class="category_article_title">
                    <h2><a href="{{url('blog/post/'.$featured_post->id)}}" target="_self"> {{$featured_post->title}} </a></h2>
                </div>
                <!----category_article_title------>
                <div class="category_article_date"> by: <a href="#">{{$featured_post->user->name}}</a></div>
                <!----category_article_date------>
                <div class="category_article_content">
                   
                {!!str_limit($featured_post->content,280)!!}
                </div>


                <!----media_social------>
            </div>
        </div>
    </div>

    @endforeach


{{--<div class="category_article_wrapper">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6">--}}
{{--<div class="top_article_img">--}}
{{--<a href="/sport" target="_self"><img class="img-responsive"--}}
{{--src="img/cat-mobi-left-1.jpg" alt="feature-top">--}}
{{--</a>--}}
{{--</div>--}}
{{--<!----top_article_img------>--}}
{{--</div>--}}



{{--<div class="col-md-6">--}}
{{--<span class="tag purple">Mobile</span>--}}

{{--<div class="category_article_title">--}}
{{--<h2><a href="/sport" target="_self">Airbnb launches photo-centric app for iPads and Android--}}
{{--tablets. </a></h2>--}}
{{--</div>--}}
{{--<!----category_article_title------>--}}
{{--<div class="category_article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>--}}
{{--<!----category_article_date------>--}}
{{--<div class="category_article_content">--}}
{{--Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate--}}
{{--B2C users after installed base benefits. Dramatically visualize customer directed convergence--}}
{{--without revolutionary ROI.--}}
{{--</div>--}}




<section id="category_section" class="category_section">
<div class="container">
    <div class="row">


        <div class="col-md-12">
    <div class="category_section mobile">
        <div class="article_title header_purple">
            <h2><a href="/blog/category/1" target="_self">News</a></h2>
        </div>
        <div class="category_article_wrapper">

   
                    {{--  Recent Posts Section --}}
                    <div class="row">

                        <div class="col-md-8">
                        <div class="category_article_body">
                            <div class="top_article_img">
                        {{--<div class="a-1">--}}
                            @php
                                $recent_posts_count = 0;
                            @endphp
                            @foreach($recent_posts as $recent_post)

                                <div class="col-md-6 abt-left">
                                    @php
                                        //$featured_image = json_decode($recent_post->featured_image,true);
                                        //dd($recent_post->featured_image->thumb);

                                    @endphp
                                    <a href="{{url('/blog/post/'.$recent_post->id)}}">
                                        <img alt="" class="img-responsive" src="{{asset($recent_post->featured_image->thumb)}}"/>
                                    </a>
                                    {{-- <h6>
                                    Find The Most
                                    </h6> --}}
                                    <h3>
                                        <a href="{{url('/blog/post/'.$recent_post->id)}}">
                                            {{$recent_post->title}}
                                        </a>
                                    </h3>
                                    <div>
                                        {!!str_limit($recent_post->content,280)!!}
                                    </div>
                                    <label>
                                        {{$recent_post->created_at->diffForHumans()}}
                                    </label>
                                </div>
                                @php
                                    $recent_posts_count++;
                                @endphp
                                @if($recent_posts_count%2 == 0)
                                    <div class="clearfix"></div>
                                @endif

                            @endforeach

                        {{--</div>--}}
                        </div>
                        </div>
                        </div>

                    <div>

                        </div>





                        {{--SIDE BAR--}}

<div class="row">



                        <div class="col-md-4">
                        <section class="widget">
                        <div class="widget_title widget_black">
                        <h2><a href="#">Popular News</a></h2>
                        </div>


                            {{--<hr>--}}
                            {{--@foreach($posts as $post)--}}
                                {{--<div class="might-grid">--}}
                                    {{--<div class="grid-might">--}}
                                        {{--<a href="{{route('post',['id'=>$post->id])}}"><img src="{{asset($post->featured_image->thumb)}}" class="img-responsive" alt=""> </a>--}}
                                    {{--</div>--}}
                                    {{--<div class="might-top">--}}
                                        {{--<h4><a href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a></h4>--}}
                                        {{--<p>{!!str_limit($post->content,280)!!}</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                            {{--<div class="text-center">--}}
                                {{--{{ $posts->links()}}--}}
                            {{--</div>--}}


                            <div class="media">
                        <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('images/category_img10.jpg')}}" width="150" alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                        <h3 class="media-heading">
                        <a href="/sport" target="_self">Canon launches photo centric 00214 Model supper shutter camera</a>
                        </h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>


                        </div>



                        </div>



                        <div class="media">
                        <div class="media-left">
                        <a href="#"><img class="media-object" src="{{asset('images/category_img11.jpg')}}" width="150" alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                        <h3 class="media-heading">
                        <a href="/sport" target="_self">Samsung galaxy note are the supper mobile of all products.</a>
                        </h3>
                        <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>


                        </div>
                        </div>





                        <!-- Popular News -->

                        <!-- col-md-4 -->
                        </section>

                        </div>









    <div class="col-md-4">
        <section class="widget">
            <div class="widget_title widget_black">
                <h2><a href="#">Weather</a></h2>
            </div>


            <div class="media">

                <div class="weather">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/43d65n79d38/toronto/" data-label_1="TORONTO" data-label_2="WEATHER" data-theme="clear" >TORONTO WEATHER</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>
                </div>


            </div>




            <!-- Popular News -->

            <!-- col-md-4 -->
        </section>

    </div>




    <div class="col-md-4">
        <section class="widget">
            <div class="widget_title widget_black">
                <h2><a href="#">CATEGORIES</a></h2>
            </div>

                {{--<div class="col-md-8 about-right heading">--}}
                    {{--<div class="blog-list categories-side">--}}

                        <div class="category_article_list">
                            <div class="media">
                                <div class="media-left">


                                    <ul class="list-unstyled" class="navig">
                                        @foreach($post_categories as $post_category)
                                            <li>
                                                <a href="{{route('post_category',['id'=>$post_category])}}">
                                                    {{$post_category->name}}
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        {{--</div>--}}

                    {{--</div>--}}

                </div>










            <!-- Popular News -->

            <!-- col-md-4 -->
        </section>

    </div>


















    <div>
    <div class="widget_title widget_black">

            <h2><a href="#">Editor's Corner</a></h2>


        <div class="widget_body"><img class="img-responsive left" src="images/editor.jpg" width="200"
                                      alt="Generic placeholder image">
        </div>

            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                users after installed base benefits. Dramatically visualize customer directed convergence without</p>

            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
                users after installed base benefits. Dramatically visualize customer directed convergence without
                revolutionary ROI.</p>
            <button class="btn pink">Read more</button>
        </div>









</div>
</div>




{{--END OF SIDE BAR--}}




                {{--<div class="col-md-4 about-right heading">--}}
                    {{--<div class="blog-list categories-side">--}}

                        {{--<div class="category_article_list">--}}
                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                        {{--<h3>--}}
                            {{--CATEGORIES--}}
                        {{--</h3>--}}

                        {{--<ul class="list-unstyled">--}}
                            {{--@foreach($post_categories as $post_category)--}}
                                {{--<li>--}}
                                    {{--<a href="{{route('post_category',['id'=>$post_category])}}">--}}
                                        {{--{{$post_category->name}}--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}

                        {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}


                <div class="col-md-4 about-right heading">
                    <div class="blog-list categories-side">
                        <div class="category_article_list">
                            <div class="media">
                                <div class="media-left">
                        <h3>
                            TAGS
                        </h3>

                        <ul class="tags">
                            @foreach($tags as $tag)
                            <li><a href="{{route('blog.search',['search_str' => $tag->name])}}" class="tag">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
    </div>
    </div>
    </div>
    </div>


</div>
</div>
</section>
<br>
<br>


<div class="container">
    @include('includes.video')
</div>

<div class="clearfix">


    @include('includes.sub')
</div>
    <!--slide-end-->
@endsection
