<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../dashboard/assets/" data-template="vertical-menu-template-free">

 @include('dashboard.layouts.style')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu -->
            @include('dashboard.layouts.menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('dashboard.layouts.header')
                <!-- / Navbar -->

                <!-- Content -->
                @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                @include('dashboard.layouts.footer')
                <!-- / Footer -->


            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    @include('dashboard.layouts.script')
     <!-- / JS -->

</body>

</html>
