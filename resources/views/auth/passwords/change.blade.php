@extends('layouts.auth')

@section('content')

<div class="panel-body">

    <form  method="POST" action="{{ route('change.password') }}">
        <p>Your account was created with a temporary password. Please create a password of your choice</p>
        @if (session('status'))
        <div class="alert success">
            {{ session('status') }}
            <span class="close">&times;</span>
        </div>
        @endif
        @if ($errors->count())
        <div class="alert error">
            {{$errors->first()}}
            <span class="close">&times;</span>
        </div>
        @endif
        {{ csrf_field() }}

        <input id="password" type="password" class="{{ $errors->has('password') ? ' has-error' : '' }}" name="password" value="{{ old('passowrd') }}" required autofocus placeholder="New Password">
        <input id="password_confirmation" type="password" class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus placeholder="Retype Password">

        <button type="submit" >
            Save Password
        </button>
    </form>
</div>

@endsection
