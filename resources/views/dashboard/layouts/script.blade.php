 <!-- Core JS -->
    <!-- build:js dashboard/assets/vendor/js/core.js -->
    <script src="{{asset("../dashboard/assets/vendor/libs/jquery/jquery.js")}}"></script>
    <script src="{{asset("../dashboard/assets/vendor/libs/popper/popper.js")}}"></script>
    <script src="{{asset("../dashboard/assets/vendor/js/bootstrap.js")}}"></script>
    <script src="{{asset("../dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")}}"></script>

    <script src="{{asset("../dashboard/assets/vendor/js/menu.js")}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset("../dashboard/assets/vendor/libs/apex-charts/apexcharts.js")}}"></script>

    <!-- Main JS -->
    <script src="{{asset("../dashboard/assets/js/main.js")}}"></script>

    <!-- Page JS -->
    <script src="{{asset("../dashboard/assets/js/dashboards-analytics.js")}}"></script>
@stack('js')
