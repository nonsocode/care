<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="{{secure_asset("images/ico/icon.ico")}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{$title or "Admin | ".config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <meta name="csrf" content="{{csrf_token()}}">
        <!-- Bootstrap core CSS     -->
        <link href="{{secure_asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <link href="{{secure_asset('css/animate.min.css')}}" rel="stylesheet"/>
        <!--  Light Bootstrap Table core CSS    -->
        <link href="{{secure_asset('css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css' rel='stylesheet' type='text/css'>
        <link href="{{secure_asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/admin.css') }}">
        @yield('links')
        @yield('style')
    </head>
    <body>
        <div class="wrapper">
            @include('inc.admin.sidebar')
            <div class="main-panel">
                @include('inc.admin.navbar')
                
                @yield('main')

            </div>
        </div>
        @yield('modals')
    </body>
    <!--   Core JS Files   -->
    <script src="{{secure_asset('js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{secure_asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{secure_asset('js/bootstrap-checkbox-radio-switch.js')}}"></script>
    <!--  Charts Plugin -->
    {{-- <script src="{{secure_asset('js/chartist.min.js')}}"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="{{secure_asset('js/bootstrap-notify.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <script src="{{secure_asset('js/laroute.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": $('meta[name=csrf]').attr('content')}
            })   
            $("body").on('click','.link',function(event) {
                window.location = $(this).data('url');
            });
        });
    </script>
    @yield('script-links')
    @yield('script')
</html>