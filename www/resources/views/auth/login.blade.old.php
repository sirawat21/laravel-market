@extends('c-layouts.main') 
@section('title', 'Home') 
@section('content')
<h2>
  <span class="fas fa-users"></span> Login
</h2>
<div class="row"> 
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
        <button type="submit" class="btn btn-dark">
            <span class="fa fa-sign-in"></span>
            <span>Login</span>
        </button>
    </form>
</div> 
@endsection
