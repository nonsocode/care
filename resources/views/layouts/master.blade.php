<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title or "Care | Get a Proffesional Driver Today"}}</title>
	
	<!-- core CSS -->
    <link href="{{secure_asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{secure_asset("css/prettyPhoto.css")}}" rel="stylesheet">
    <link href="{{secure_asset("css/main.css")}}" rel="stylesheet">
    <link href="{{secure_asset("css/responsive.css")}}" rel="stylesheet">
    <link href="{{secure_asset("css/animate.min.css")}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{secure_asset("js/html5shiv.js")}}"></script>
    <script src="{{secure_asset("js/respond.min.js")}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{secure_asset("images/ico/icon.ico")}}">
    <link rel="apple-touch-icon-precomposed" sizes="256x256" href="{{secure_asset("images/ico/icon.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="{{secure_asset("images/ico/icon.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="{{secure_asset("images/ico/icon.png")}}">
    <link rel="apple-touch-icon-precomposed" href="{{secure_asset("images/ico/icon.png")}}">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    @yield('link')
</head><!--/head-->

<body class="homepage">
    @include('inc.header')
    @yield('main')
    @include('inc.footer')

    <script src="{{secure_asset("js/jquery.js")}}"></script>
    <script src="{{secure_asset("js/bootstrap.min.js")}}"></script>
    <script src="{{secure_asset("js/jquery.prettyPhoto.js")}}"></script>
    <script src="{{secure_asset("js/jquery.isotope.min.js")}}"></script>
    <script src="{{secure_asset("js/main.js")}}"></script>
    <script src="{{secure_asset("js/wow.min.js")}}"></script>
    <script src="{{secure_asset('js/laroute.js')}}"></script>
    @yield('script')    
</body>
</html>