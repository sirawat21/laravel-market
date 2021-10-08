@extends('c-layouts.main') 
@section('title', 'Home') 
@section('content')
<h2>
  <span class="fas fa-users"></span> Login
</h2>
<div class="row justify-content-md-center">

    <div class="col-md-6">
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
        <div class="container">
        <div class="row">
        <div class="col-md-9">
            <button type="submit" class="btn btn-dark">
                <span class="fa fa-arrow-right" aria-hidden="true"></span>
                <span>Login</span>
            </button>
        </div>
        <div class="col-md-3">
            <a class="nav-link" href="{{ url('register') }}">Register</a>                
        </div>
        </div>
        </div>
        </div>
    </form>
    </div>
    </div>
    </div>
</div> 
@endsection
