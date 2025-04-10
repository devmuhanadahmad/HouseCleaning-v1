<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Daily Cleaning') }} </title>
    <!-- Stylesheets -->
    @include('website.layouts.style')
    @livewireStyles

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <header class="main-header header-style-three">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">

                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href={{ route('website.home') }}><img src="{{ asset('website/images/logo-3.svg') }}"
                                    style="width: 220px; height: 70px;" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current "><a href="{{ route('website.home') }}">Home</a></li>
                                    <li><a href="{{ route('website.about') }}">About us</a></li>
                                    <li><a href="#bookNow">Book Now</a></li>
                                    <li><a href="{{ route('website.applyForJobs.index') }}">Apply For Job</a></li>
                                    <li><a href="{{ route('website.faq') }}">Faq</a></li>
                                    <li><a href="{{ route('website.contact') }}">Contact</a></li>
                                    <li class="dropdown"><a
                                            href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                                        <ul>
                                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!-- Main Menu End-->
                            <div class="nav-box">
                                <div class="nav-btn nav-toggler navSidebar-button"><span
                                        class="icon flaticon-menu-1"></span></div>
                            </div>

                            <!-- Social Box -->
                            <ul class="social-box clearfix">
                                <li><a href="{{config('contact.facebook')}}"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="{{config('contact.instagram')}}"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="{{config('contact.twiter')}}"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="{{config('contact.linkedin')}}"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>

                        </div>
                    </div>


                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{{ route('website.home') }}" class="img-responsive"><img
                                src="website/images/favicon.svg" style="width: 140px; height: 50px;" alt=""
                                title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript--></ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon far fa-window-close"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href={{ route('website.home') }}><img src="website/images/logo-2.svg"
                                style=" width: 140px; height: 50px;" alt="" title=""></a></div>

                    <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        <!-- Main Slider Three -->
        <section class="main-slider-three">
            <div class="banner-carousel">
                <!-- Swiper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>{{ __('website.Cleaning services in Netherlands.') }}</h2>
                                        <div class="text">Providing cleaning services, and undoubtedly it is provided
                                            with a high degree of responsibility and honesty.</div>
                                        <div class="btn-box">
                                            <a href="#bookNow" class="theme-btn appointment-btn"><span
                                                    class="txt">Book Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="website/images/main-slider/bgTow.svg"
                                                style="background-color: white;" width="711px " alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- End Main Slider -->

        <!-- About Section -->
        <section class="health-section">
            <div class="auto-container">
                <div class="inner-container">

                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="border-line"></div>
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <h2>Who We Are ? </h2>
                                    <div class="separator"></div>
                                </div>
                                <div class="text">We provide house cleaning services by highly skilled cleaners who
                                    are skilled in all house cleaning tasks. They also have a high level of
                                    responsibility during work, meaning that they perform cleaning tasks with the most
                                    effective materials.</div>
                                <a href="{{ route('website.about') }}" class="theme-btn btn-style-one"><span
                                        class="txt">More About Us</span></a>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1300ms">
                                <div class="image">
                                    <img src="website/images/resource/about.svg" style="width: 864px; height: 336px;"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section -->



        <!-- Empty Section -->
        <section class="team-section">
        </section>
        <!-- End Empty Section -->

        <!-- Video Section -->
        <section class="video-section" style="background-image:url(website/images/background/5.jpg)">

        </section>
        <!-- End Video Section -->

        <!-- Book now Section Two -->
        <section class="appointment-section-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column wow slideInLeft" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="website/images/resource/doctor-2.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Form Column -->
                       @livewire('order.create')

                    </div>
                </div>
            </div>
        </section>
        <!-- End Book now Section -->

        <br><br><br><br>


        <!-- FullWidth Section -->
        <section class="fullwidth-section">
            <div class="outer-container">
                <div class="clearfix">

                    <!-- Left Column -->
                    <div class="left-column" style="background-color:rgb(114, 102, 102);">
                        <div class="inner-column clearfix">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="website/images/playstore.png" width="70px">
                                </div>
                                <div class="title">Need a Google Play for Check-up? Download on the <br>
                                    Google Play</div>

                                <h2>Google Play</h2>
                                <a href="{{config('link.android')}}" class="theme-btn btn-style-two"><span class="txt">Download
                                    </span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Left Column -->
                    <div class="left-column" style="background-color:rgb(71, 115, 187);">
                        <div class="inner-column clearfix">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="website/images/app.png" width="70px">
                                </div>
                                <div class="title">Need a App Store for Check-up? Download on the <br>
                                    App Store</div>

                                <h2>App Store</h2>
                                <a href="{{config("link.apple")}}" class="theme-btn btn-style-two"><span class="txt">Download
                                    </span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End FullWidth Section -->


        <br><br><br><br><br>

        <!--Main Footer-->
        @include('website.layouts.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href={{ route('website.home') }}><img src="website/images/logo-3.svg"
                                        style="width: 230px; height: 70px;" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">Providing cleaning services, and undoubtedly it is provided with a
                                    high degree of responsibility and honesty.</p>
                                <a href="#bookNow" class="theme-btn btn-style-two"><span class="txt">Book
                                        Now</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-two">
                                    <li><span class="icon flaticon-telephone"></span>{{config('contact.phone')}}</li>
                                    <li><span class="icon flaticon-message-1"></span>{{config('contact.email')}}</li>
                                    <li><span class="icon flaticon-timetable"></span>Week Days: 09.00 to 18.00 Sunday:
                                        Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="{{config('contact.facebook')}}" class="fab fa-facebook-f"></a></li>
                                <li class="instagram"><a href="{{config('contact.instagram')}}" class="fab fa-instagram"></a></li>
                                <li class="twitter"><a href="{{config('contact.twiter')}}" class="fab fa-twitter"></a></li>
                                <li class="linkedin"><a href="{{config('contact.linkedin')}}" class="fab fa-linkedin-in"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


    @include('website.layouts.scripts')


</body>

</html>
