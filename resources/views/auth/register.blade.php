@extends('layouts.app')
@section('title', 'Register User')
@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" value="{{ old('name') }}" required
                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input name="email" type="email" value="{{ old('email') }}" required
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" required
                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="password_confirmation">Retyped Pasword</label>
            <input name="password_confirmation" type="password" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Register!</button>
    </form>
@endsection