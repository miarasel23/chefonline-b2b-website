<div id="wrapper" class="homepage homepage-1">
        <header id="header" class="header header-style-4">
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 hidden-xs logo-tab">
                            <a href="{{asset('')}}" class="logo"> <img
                                    src="{{asset('')}}assets/images/logo.png"
                                    width="186" height="37" alt="ChefOnline Logo" /> </a>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 custom-nav">
                            <div class="row">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                                            data-target=".js-navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand hidden-sm hidden-md hidden-lg logo"
                                            href="{{asset('')}}"><img
                                                class="img-responsive" width="186" height="37"
                                                src="assets/images/logo.png" alt="ChefOnline Logo" /></a>
                                    </div>

                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                        <ul class="nav navbar-nav">

                                            <li>
                                                <a href='{{asset('')}}'>Home</a>
                                            </li>

                                            <!--                                 <li>-->
                                            <!--                                    <a target="_blank" href="https://chefonline.co.uk/"> ChefOnline</a>-->
                                            <!--                                 </li>-->

                                            <li class="dropdown mega-dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<i
                                                        class="fa fa-chevron-down"></i></a>

                                                <ul class="dropdown-menu mega-dropdown-menu row">

                                                    <li class="col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header"><a
                                                                    href="{{asset('')}}services">Services</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a
                                                                    href="{{asset('')}}online-ordering-system">
                                                                    Online Food Ordering
                                                                    System</a></li>
                                                            <li><a
                                                                    href="{{asset('')}}cloud-epos-system">
                                                                    EPoS System</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header hidden-xs">&nbsp;</li>
                                                            <li class="divider hidden-xs"></li>
                                                            <li><a
                                                                    href="{{asset('')}}digital-marketing">
                                                                    Digital Marketing</a></li>
                                                            <li><a
                                                                    href="{{asset('')}}print-media">
                                                                    Print Media</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers
                                                    <i class="fa fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu mega-dropdown-menu press-dropdown">
                                                    <li>
                                                        <a
                                                            href="{{asset('')}}offer/black-friday/2024">
                                                            Black Friday
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{asset('')}}offer/new-year/2024">
                                                            New Year
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{asset('')}}offer/valentine-offer/2025">
                                                            Valentine's offer
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>


                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Press & Media
                                                    <i class="fa fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu mega-dropdown-menu press-dropdown">
                                                    <li><a
                                                            href="{{asset('')}}videos">Video</a>
                                                    </li>
                                                    <li><a
                                                            href="{{asset('')}}photo">Photo</a>
                                                    </li>
                                                    <li><a
                                                            href="{{asset('')}}news">News</a>
                                                    </li>
                                                </ul>
                                            </li>


                                            <li><a href="{{asset('')}}portfolio">
                                                    Portfolio </a></li>


                                            <li>
                                                <a href="https://www.chefonline.co.uk/partner"> Business
                                                    Registration</a>
                                            </li>
                                            <li>
                                                 <a href="{{asset('/')}}associate-partners"> Partners </a>
                                            </li>

                                            <li><a href="{{asset('')}}contact">
                                                    Contact Us </a></li>

                                        </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header Ends Here -->
        </header>
        <!--header Section Ends Here -->

        <script>
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#header').addClass('navbar-fixed-top');
                } else {
                    $('#header').removeClass('navbar-fixed-top');
                }

            });
        </script>
