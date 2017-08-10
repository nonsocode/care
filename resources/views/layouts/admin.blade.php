<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{$title or "Admin | ".config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>
        <!--  Light Bootstrap Table core CSS    -->
        <link href="{{asset('css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
        @yield('links')
        @yield('style')
    </head>
    <body>
        <div class="wrapper">
            @include('inc.admin.sidebar')
            <div class="main-panel">
                @include('inc.admin.navbar')
                
                @yield('main')

                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    <!--   Core JS Files   -->
    <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{asset('js/bootstrap-checkbox-radio-switch.js')}}"></script>
    <!--  Charts Plugin -->
    <script src="{{asset('js/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{asset('js/light-bootstrap-dashboard.js')}}"></script>
    @yield('script-links')
    @yield('script')
</html>