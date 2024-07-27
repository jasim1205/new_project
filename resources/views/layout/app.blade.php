<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>@yield('title',env('APP_NAME')) </title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('public/assets/css/main/app.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/main/app-dark.css')}}">
        <link rel="shortcut icon" href="{{asset('public/assets/images/logo/favicon.svg')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('public/assets/images/logo/favicon.png')}}" type="image/png">
        <link rel="stylesheet" href="{{asset('public/assets/css/shared/iconly.css')}}">
        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        
        @stack('styles')
    </head>
    <body>
        <div id="app">
            {{-- <div class="container-fluid fixed-top">
                <div class="row" style="background-color: cornflowerblue">
                    <div class="col-md-10">
                        <div class="d-flex">
                            <img src="{{asset('public/uploads/employee/'.request()->session()->get('image'))}}" width="50px" class="rounded-circle">

                            <p class="user-name mb-0 text-white">{{encryptor('decrypt',request()->session()->get('userName'))}}</p>
                            <p class="designattion mb-0 text-white">{{encryptor('decrypt',request()->session()->get('role')) }}</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="my-2 text-end">
                            <a href="#" class="text-white p-1 mx-2 rounded" style="background-color: rgb(41, 218, 18)"><i class="fa fa-house"></i></a>
                            <a href="#" class="text-white p-1 rounded" style="background-color: rgb(219, 20, 20)"><i class="fa fa-lock"></i></a>
                        </p>
                    </div>
                </div>
                <div class="row bg-primary" style="margin-top: 2px">
                    <div class="col-md-12">
                        <p class="my-2 text-end text-white fw-bold">
                            Approval/Notification
                        </p>
                    </div>
                </div>
            </div> --}}
           
           
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header position-relative">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="#"><img src="{{asset('public/assets/images/logo/logo.svg')}}" alt="Logo" srcset=""></a>
                            </div>
                            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                                <div class="form-check form-switch fs-6">
                                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                                    <label class="form-check-label" ></label>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
                            </div>
                            <div class="sidebar-toggler  x">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        @include('layout.nav_'.currentUser())
                    </div>
                </div>
            </div>
            <div id="main">
                    @yield('content')
                {{-- <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>{{ date('Y') }} &copy; Zoom</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                    href="#">Muktodhara Technology Limited</a></p>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
        <script src="{{asset('public/assets/js/bootstrap.js')}}"></script>
        <script src="{{asset('public/assets/js/app.js')}}"></script>
       
        <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
         @stack('scripts')
         <script>
            function printPDF(pageId){
                var prtContent = document.getElementById(pageId);
                var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
                WinPrint.document.write("<link rel=\"stylesheet\" href=\"{{asset('public/assets/css/main/app.css')}}\">");
                WinPrint.document.write("<style>@page {size: 7.5in 11.69in;margin: 5mm 3mm 5mm 3mm;} @media print { body {margin: 0;background-color: #fff;} .show-print{display:block !important;} }</style>")
                WinPrint.document.write(prtContent.innerHTML);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();
            }
         </script>

        <script src="{{asset('public/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('public/assets/js/pages/dashboard.js')}}"></script>
    </body>
</html>
