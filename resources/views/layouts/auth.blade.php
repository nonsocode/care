<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Care | Admin</title>
        
        <link rel="shortcut icon" href="{{secure_asset("images/ico/icon.ico")}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="{{secure_asset('css/auth.css')}}">
        
    </head>
    <body>
        <div class="container">
            <div class="info">
                <h1>Care.com.ng</h1>
            </div>
        </div>
        <div class="form">
            <div class="thumbnail"><img src="{{ secure_asset('img/default-avatar.png') }}"/></div>
            @yield('content');
        </div>
        <script src='{{ secure_asset('js/jquery.js') }}'></script>
        <script src="{{secure_asset('js/auth.js')}}"></script>
        <script src="{{secure_asset('js/laroute.js')}}"></script>
    </body>
</html>