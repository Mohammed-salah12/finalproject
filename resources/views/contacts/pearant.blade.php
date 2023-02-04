<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="{{ asset('store/style.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('cms/plugins/summernote/summernote-bs4.min.css') }}">

    {{-- <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @yield('stylee')
</head>
<body>
    <nav>
        <div class="logo">Web trend</div>
        <div class="open"><i class="fas fa-bars"></i></div>
        <ul class="links">
            <li><a href="{{ route('store.home') }}">home</a></li>
            <li><a href="#">products</a></li>
            <li><a href="#">about</a></li>
            <li><a href="{{ route('contacts.create') }}">contact</a></li>
            <li><a href="{{ route('comments.create') }}">Customer opinions</a></li>
            <div class="close"><i class="fas fa-times"></i></div>
        </ul>
    </nav>
@yield('content')
    <!-- Start Footer -->
    <footer>
        <div class="row">
            <div class="single_footer">
                <h4>about us</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis quae error, modi enim eveniet similique veniam magni, laborum architecto ipsam sed, ut exercitationem aliquid. Natus tempora vel accusantium accusamus temporibus.</p>
                <div class="social_icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="single_footer">
                <h4>main menu</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> home</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> products</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> about</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> contact</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> accounts</a></li>
                </ul>
            </div>

            <div class="single_footer">
                <h4>contact us</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-map-marker-plus"></i> north street, cairo, Iraq</a></li>
                    <li><a href="#"><i class="fas fa-mobile-android-alt"></i> +964 7800000000</a></li>
                    <li><a href="#"><i class="far fa-envelope"></i> info@magmaint.com</a></li>
                    <li><a href="#"><i class="far fa-globe"></i> www.magmaint.com</a></li>
                </ul>
            </div>
        </div>
        <div class="copy">
            All Rights Reserved © 2022 

        </div>
    </footer>
    <!-- Javascript Section -->
    <script src="{{asset('cms/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('cms/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('cms/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('cms/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('cms/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('cms/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('cms/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('cms/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('cms/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('cms/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('cms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('cms/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('cms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('cms/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('cms/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('cms/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('cms/jss/crud.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    @yield('script')
</body>
</html>
