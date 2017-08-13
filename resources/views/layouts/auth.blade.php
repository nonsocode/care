<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Care | Admin</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="{{asset('css/auth.css')}}">
        
    </head>
    <body>
        <div class="container">
            <div class="info">
                <h1>Care.com.ng</h1>
            </div>
        </div>
        <div class="form">
            <div class="thumbnail"><img src="{{ asset('img/default-avatar.png') }}"/></div>
            @yield('content');
        </div>
        <script src='{{ asset('js/jquery.js') }}'></script>
        <script src="{{asset('js/auth.js')}}"></script>
    </body>
</html>