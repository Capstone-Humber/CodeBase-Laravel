@extends('layouts.template')
@section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <div>

        <body id="page-top" data-spy="scroll" data-target=".navbar">
        <div id="main-wrapper">
            <!-- Page Preloader -->
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
            <!-- preloader -->

            <div class="uc-mobile-menu-pusher">
                <div class="content-wrapper">





                    <section id="entity_section" class="entity_section">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-8">



                                    <div class="category_article_wrapper">
                                        @if(Session::has('sent'))
                                            <div class="alert alert-success">
                                                {{ Session::get('sent') }}
                                            </div>
                                        @endif

                                        {!! Form::open(['route'=>'contactus.store']) !!}

                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            {!! Form::label('Name:') !!}
                                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}

                                        </div>

                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            {!! Form::label('Email:') !!}
                                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}

                                        </div>

                                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                            {!! Form::label('Message:') !!}
                                            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}

                                        </div>
                                        <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
                                            <div class="g-recaptcha" data-sitekey='6LepsJoUAAAAANHUAlI_00a6q1CQm_6FtHtzLDE0'></div>
                                            <span class="text-danger">{{ $errors->has('g-recaptcha-response') ? 'Please enter captcha.' : '' }}</span>
                                        </div>



                                        <div class="form-group">
                                            <button class="btn btn-success">Contact US!</button>
                                        </div>

                                        {!! Form::close() !!}

                                    </div>

                                </div>
                                <!-- col-md-8 -->

                                <div class="col-md-4">
                                    <div class="widget">
                                        <div class="widget_title widget_black">
                                            <h2><a href="#">Location</a></h2>
                                        </div>

                                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%"
                                                                                               height="40%" id="gmap_canvas" src="https://maps.google.com/maps?q=1555%20albion&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                                                               frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                                </iframe>
                                                <span style="font-size:12px;">Werbung:<a href="https://www.pureblack.de">pureblack.de</a></span>
                                                <a href="https://www.embedgooglemap.net/elegantthemes/" class="lic" rel="nofollow">
                                                    Divi. The Ultimate WordPress Theme.</a>
                                            </div>
                                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.lic{position:absolute;z-index:999;bottom:-14px;right:0;font-size:11px;font-family:arial;color:#666;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                                        </div>
                                        <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2555%20albion&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><span style="font-size:12px;">Werbung: <a href="https://www.pureblack.de">pureblack.de</a></span><a href="https://www.embedgooglemap.net/elegantthemes/" class="lic" rel="nofollow">Divi. The Ultimate WordPress Theme.</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.lic{position:absolute;z-index:999;bottom:-14px;right:0;font-size:11px;font-family:arial;color:#666;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            -->

                                        <!-- Popular News -->

                                        <!-- col-md-4 -->

                                    </div>
                                    <!-- row -->

                                </div>
                                <!-- container -->

                    </section>
                    <!-- entity_section -->


        </body>
    </div>
@endsection