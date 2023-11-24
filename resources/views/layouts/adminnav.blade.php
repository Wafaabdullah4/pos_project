<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS</title>
    <link rel="stylesheet" href="{{asset('Purple/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('Purple/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet"  href="{{asset('Purple/assets/css/style.css')}}" >
</head>
<body>
    <div class="container-scroller">
        @include('layouts.shared.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.shared.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                @yield('content')
                </div>
                @include('layouts.shared.footer')
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{asset('Purple/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('Purple/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('Purple/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('Purple/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('Purple/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('Purple/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('Purple/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('Purple/assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
</body>
</html>