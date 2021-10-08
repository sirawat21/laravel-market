@extends('c-layouts.main') 
@section('title', 'Login') 
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
            <label for="email" class="form-label @error('email') is-invalid @enderror">{{ __('E-Mail Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label @error('password') is-invalid @enderror">{{ __('Password') }}</label>
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
                <span>{{ __('Login') }}</span>
            </button>
        </div>
        <div class="col-md-3">
            <a class="nav-link" href="{{ url('register') }}">{{ __('Register') }}</a>                
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
