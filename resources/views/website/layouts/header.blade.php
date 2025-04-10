  <!--Header Top-->
  <div class="header-top">
    <div class="auto-container clearfix">
        <div class="top-left clearfix">
            <ul class="list">
                <li><span class="icon fas fa-envelope"></span> {{config('contact.email')}}</li>
                <li><span class="icon fas fa-phone"></span> <a href="tel:{{config('contact.phone')}}"> {{config('contact.phone')}}</a></li>
            </ul>
        </div>
        <div class="top-right clearfix">
            <ul class="social-icons">
                <li><a href="{{config('contact.facebook')}}"><span class="fab fa-facebook"></span></a></li>
                <li><a href="{{config('contact.instagram')}}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{config('contact.twiter')}}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{config('contact.linkedin')}}"><span class="fab fa-linkedin-in"></span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Header Top -->

<div class="header-upper">
    <div class="inner-container">
        <div class="auto-container clearfix">
            <!--Info-->
            <div class="logo-outer">
                <div class="logo"><a href="{{route('website.home')}}"><img src="{{asset("website/images/logo-2.svg")}}" alert="ff" style="width: 230px; height: 70px; " alt="logo" title=""></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="{{ Route::is('website.home') ? 'current' : '' }}"><a href="{{route("website.home")}}">Home</a></li>
                            <li class="{{Route::is('website.about') ? 'current' : ''}}"><a href="{{route("website.about")}}">About Us</a></li>
                            <li class="{{Route::is('website.applyForJob') ? 'current' : ''}}"><a href="{{route("website.applyForJob")}}">Apply For Job</a></li>
                            <li class="{{Route::is('website.faq') ? 'current' : ''}}"><a href="{{route("website.faq")}}">Faq</a></li>
                            <li class="{{Route::is('website.contact') ? 'current' : ''}}"><a href="{{route("website.contact")}}">Contact</a></li>
                            <li class="dropdown"><a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                                <ul>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
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
                    <div class="btn-box">
                        <a href="#bookNow" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
