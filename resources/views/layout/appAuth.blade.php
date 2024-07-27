<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/pages/auth.css')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('public/assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12 mx-auto">
            @yield('content')
            </div>
            {{-- <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div> --}}
        </div>
    </div>

    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
