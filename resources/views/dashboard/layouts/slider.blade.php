 <!-- main-sidebar -->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar sidebar-scroll">
 <div class="main-sidebar-header active">
 <a class="desktop-logo logo-light active" href="index.html"><img src="{{asset("../../backend/assets/img/brand/logo.png")}}"
 class="main-logo" alt="logo"></a>
 <a class="desktop-logo logo-dark active" href="index.html"><img
 src="{{asset("../../backend/assets/img/brand/logo-white.png")}}" class="main-logo dark-theme" alt="logo"></a>
 <a class="logo-icon mobile-logo icon-light active" href="index.html"><img
 src="{{asset("../../backend/assets/img/brand/favicon.png")}}" class="logo-icon" alt="logo"></a>
 <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img
 src="{{asset("../../backend/assets/img/brand/favicon-white.png")}}" class="logo-icon dark-theme" alt="logo"></a>
 </div>

 @if (Auth::guard('web')->check())
 @include('backend.layouts.slider.user')
 @endif

 @if (Auth::guard('admin')->check())
 @include('backend.layouts.slider.admin')
 @endif


 @if (Auth::guard('doctor')->check())
 @include('backend.layouts.slider.doctor')
 @endif

 @if (Auth::guard('patient')->check())
 @include('backend.layouts.slider.patient')
 @endif
 </aside>
 <!-- main-sidebar -->
