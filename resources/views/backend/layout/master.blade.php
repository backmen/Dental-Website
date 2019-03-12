<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/admin/css/style.min.css')}}">
</head>
<body>
<div id="wrapper">

    @include('backend.layout.partials.menu')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('backend.layout.partials.header')
            <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>



<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/vendor/admin/js/js.min.js')}}"></script>
</body>
</html>
