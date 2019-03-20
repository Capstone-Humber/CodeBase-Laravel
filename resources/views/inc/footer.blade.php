<section id="subscribe_section" class="subscribe_section">
<div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                              <p>{{ \Session::get('success') }}</p>
                            </div><br />
                            @endif
                            @if (\Session::has('failure'))
                            <div class="alert alert-danger">
                              <p>{{ \Session::get('failure') }}</p>
                            </div><br />
                            @endif
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
            </div>
        <form action="{{url('index')}}" method="post" class="form-horizontal">
                @csrf
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="email" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="/category" target="_self">Ghana News</a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="/">
                        <img src="img/tech_about.jpg" alt="technews">
                    </a>

                    <p> The Ghanaian News, publishes news and comments from the Community 
                        and serves Ghanaians across Canada with a good source of information.
                        We are committed to high quality community journalism with a focus
                        on Canadian and Ghanaian news. </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.blade.php" target="_self">Discover</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="/who">About Us</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Job</a></li>
                            <li><a href="#">SiteMap</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="/contactus">Contact Us</a></li>
                            <li><a href="#">Newsletter Alerts</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="#">Sms Subscription</a></li>
                            <li><a href="#">Advertisement Policy</a></li>
                            <li><a href="#">Report Technical issue</a></li>
                            <li><a href="#">Complaints and Corrections</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Securedrop</a></li>
                            <li><a href="#">Archives</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Editor Picks</a></h3>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="img/editor_pic1.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="sport.blade.php">Apple launches photo-centric wrist watch for Android</a>
                        </h3>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="img/editor_pic2.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="sport.blade.php">Apple launches photo-centric wrist watch for Android</a>
                        </h3>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="img/editor_pic3.jpg"
                                         alt="Generic placeholder image"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="sport.blade.php">Apple launches photo-centric wrist watch for Android</a>
                        </h3>
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="/category" target="_self">Tech Photos</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="img/tech_photo1.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo2.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo3.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo4.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo5.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo6.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo7.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo8.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo9.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo10.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo11.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="img/tech_photo12.jpg" alt="Tech Photos">
                </div>

            </div>
        </div>
    </div>

    <div class="footer_bottom_Section">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-sm-3">
                        <div class="social">
                            <a class="icons-sm fb-ic" href='https://www.facebook.com/ghanaiannews'><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic" href='https://twitter.com/ghanaiannews'><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic" href='https://www.youtube.com/user/ghanaiannews'><i class="fa fa-youtube"></i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>&copy; Copyright 2019-ghanaiannews</p>
                    </div>
                                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->


<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="js/script.js"></script>