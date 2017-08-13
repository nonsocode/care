@extends('layouts.auth')

@section('content')

<div class="panel-body">

    <form  method="POST" action="{{ route('password.email') }}">
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

        <input id="email" type="email" class="{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">

        <button type="submit" >
            Send Password Reset Link
        </button>
    </form>
</div>

@endsection
