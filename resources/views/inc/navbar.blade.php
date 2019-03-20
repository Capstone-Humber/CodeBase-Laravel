<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                    <?php
                    $timestamp = time();

                    $today = (date("F d, Y h:i A", $timestamp));
                    echo $today;

                    ?>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>

                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="/"><img src="img/logo.jpg" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">

                            <li class="dropdown lang">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">En <i
                                            class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Bn</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                            class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="Type Something"> <span class="input-group-btn">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">Search
                                                                            </button>
                                                                        </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">



                            <!-- Drop down For About Us -->

                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us
                                    <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">

                                                <li><a href="/who">Who we are</a></li>
                                                <li><a href="/advert">Advertise</a></li>



                                            </ul>

                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!-- Drop down For News -->

                            <li class="dropdown m-menu-fw"><a href="/"  class="dropdown-toggle">News
                                    <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">

                                                <li><a href="/canada">Canadian News</a></li>
                                                <li><a href="/world">World News</a></li>
                                                <li><a href="/tech">Technology News</a></li>
                                                <li><a href="/politics">Politics</a></li>
                                                <li><a href="/month">Monthly Edition</a></li>
                                                <li><a href="/weather">Weather</a></li>


                                            </ul>

                                        </div>
                                    </li>
                                </ul>
                            </li>



                            <li><a href="/sport">Sports</a></li>

                            <li><a href="/contactus">Contact US</a></li>



                            <!-- Drop down For Gallery -->

                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Opinion
                                    <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">

                                                <li><a href="/editorials">Editorials</a></li>
                                                <li><a href="/columnist">Columnist</a></li>



                                            </ul>

                                        </div>
                                    </li>
                                </ul>
                            </li>









                            <!-- Drop down For More -->

                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                                    <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Community</li>
                                                <li><a href="/events">Events</a></li>
                                                <li><a href="/lifestyle">Lifestyle</a></li>
                                                <li><a href="/forums">Forums</a></li>
                                                <li><a href="/obituaries">Obituaries</a></li>

                                            </ul>


                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Entertainment</li>
                                                <li><a href="/radio">Radio</a></li>
                                                <li><a href="/television">Television</a></li>


                                            </ul>

                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Gallery</li>
                                                <li><a href="/photo">Photo</a></li>
                                                <li><a href="/video">Video</a></li>


                                            </ul>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->