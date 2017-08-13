@extends('layouts.auth')

@section('content')
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
@endsection
