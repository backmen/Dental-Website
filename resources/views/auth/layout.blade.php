<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendor/admin/css/style.min.css')}}">
</head>
<body>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


    <script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/vendor/admin/js/js.min.js')}}"></script>
</body>
</html>
