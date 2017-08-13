@extends('layouts.auth')

@section('content')


<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
    @if (session('status'))
        <div class="alert success">
            {{ session('status') }}
            <span class="close">&times;</span>
        </div>
    @endif
    @if ($errors->count())
        <div class="alert error">
            {{ $errors->first() }}
            <span class="close">&times;</span>
        </div>
    @endif
    {{ csrf_field() }}

    <input type="hidden" name="token" value="{{ $token }}">

    <input id="email" type="email" class="{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

    <input id="password" type="password" class="{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required placeholder="New Password"> 

    <input id="password-confirm" type="password" class="{{ $errors->has('password') ? ' has-error' : '' }}" name="password_confirmation" required placeholder="Confirm Password">

    <button type="submit">Reset Password</button>
    <p class="message">Go to <a href="{{ route('login') }}">login</a></p>
</form>
@endsection
