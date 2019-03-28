    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">

            <div class="head-main" >

                <a href="{{url('/')}}"><img id="logoMain" src="{{asset('images/logo/log.png')}}"></a>
            </div>

            <div class="col-md-4">
                <div class="right_section">
                <?php
                $timestamp = time();

                $today = (date("F d, Y h:i A", $timestamp));
                echo $today;

                ?>
                <!-- Time -->

                    <!-- Top Social Section -->
                </div>
                <!-- Left Header Section -->
            </div>
        </div>
    </div>
    <!--header-top-end-->
    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">





                <div class="navigation">
                    <span class="menu"></span>
                    <ul class="navig">
                        <li><a href="{{url('/')}}" @if(Request::segment('1') == '') class="active" @endif>Home</a></li>
                        <li><a href="{{url('/gallery')}}" @if(Request::segment('1') == 'gallery') class="active" @endif>Gallery</a></li>
                        <li><a href="{{url('/about')}}" @if(Request::segment('1') == 'about') class="active" @endif>About</a></li>
                        <li><a href="{{url('/weather')}}" @if(Request::segment('1') == 'weather') class="active" @endif>Weather</a></li>
                        <li><a href="{{url('/contactus')}}" @if(Request::segment('1') == 'contactus') class="active" @endif>Contact</a></li>

                       
                    </ul>
                </div>
                <div class="header-right">
                    <div class="search-bar">
                        {{Form::open(['url'=>route('blog.search'),'method'=>'get'])}}
                        {{Form::text('search_str',null,[])}}
                        <input type="submit" value="">
                        {{Form::close()}}
                    </div>
                    <ul>

                        <li><a class="icons-sm fb-ic" class="btn-facebook" href='https://www.facebook.com/ghanaiannews' target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <!--Twitter-->
                        <li><a class="icons-sm tw-ic" href='https://twitter.com/ghanaiannews' target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <!--Google +-->
                        <li><a class="icons-sm inst-ic" href='https://www.youtube.com/user/ghanaiannews' target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <!--Linkedin-->
                        <li><a class="icons-sm tmb-ic" href="#" target="_blank"><i class="fa fa-tumblr"> </i></a></li>
                        <!--Pinterest-->
                        <li><a class="icons-sm rss-ic" href="#" target="_blank"><i class="fa fa-rss"> </i></a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>