@extends('c-layouts.main') 
@section('title', 'Register') 
@section('content')
<h2>
  <span class="fa fa-id-card"></span> Register
</h2>
<div class="row justify-content-md-center">

    <div class="col-md-6">
    <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
        <div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="email" type="password" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
        </div>
        <!-- Pass -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
        </div>
        <!-- Pass Confirm -->
        <div class="mb-3">
            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
            <input name="password-confirm" id="password-confirm" type="password" class="form-control">
        </div>



        <div class="mb-3">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-dark">
                <span class="fa fa-arrow-right" aria-hidden="true"></span>
                <span>{{ __('Register') }}</span>
            </button>
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
