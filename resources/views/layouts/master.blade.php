<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title or "Care | Get a Proffesional Driver Today"}}</title>
	
	<!-- core CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset("css/prettyPhoto.css")}}" rel="stylesheet">
    <link href="{{asset("css/main.css")}}" rel="stylesheet">
    <link href="{{asset("css/responsive.css")}}" rel="stylesheet">
    <link href="{{asset("css/animate.min.css")}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset("js/html5shiv.js")}}"></script>
    <script src="{{asset("js/respond.min.js")}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset("images/ico/icon.ico")}}">
    <link rel="apple-touch-icon-precomposed" sizes="256x256" href="{{asset("images/ico/icon.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="{{asset("images/ico/icon.png")}}">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="{{asset("images/ico/icon.png")}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset("images/ico/icon.png")}}">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head><!--/head-->

<body class="homepage">
    @include('inc.header')
    @yield('main')
    @include('inc.footer')

    <script src="{{asset("js/jquery.js")}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/jquery.prettyPhoto.js")}}"></script>
    <script src="{{asset("js/jquery.isotope.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/wow.min.js")}}"></script>
</body>
</html>