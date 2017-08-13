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
    <form class="register-form">
      <input type="text" placeholder="name" autofocus />
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Forgot Password? <a href="#">Click here</a></p>
    </form>
    <form class="login-form" action="{{route('login')}}" method="POST">
      @if (session()->has('error'))
        <div class="alert error">
        {{session('error')}}
        <span class="close">&times;</span>
        </div>
      @endif
      @if ($errors->count())
        <div class="alert error">
        {{$errors->first()}}
        <span class="close">&times;</span>
        </div>
      @endif
      {{csrf_field()}}
      <input type="email" class="{{$errors->has('email') ? "has-error" : "" }}" name="email" placeholder="Email" value="{{old('email')}}" autofocus>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Forgot Password? <a href="{{ route('password.request') }}">Click Here</a></p>
    </form>
  </div>
  <script src='{{ asset('js/jquery.js') }}'></script>

  <script src="{{asset('js/auth.js')}}"></script>

</body>
</html>
