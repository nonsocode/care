@extends('layouts.app')

@section('content')
    <form class="register-form">
      <input type="text" placeholder="name" autofocus />
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Forgot Password? <a href="#">Click here</a></p>
    </form>
@endsection
