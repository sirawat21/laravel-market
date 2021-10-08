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
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
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
        <!-- Type Selection -->
        <div class="mb-3">
            <label for="type" class="form-label">{{ __('Account Type') }}</label>
            @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <select if="type" name="type" class="form-control">
                <option value="member" selected>Member</option>
                <option value="moderator">Moderator</option>
            </select>
        </div>
        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">{{ __('Phone Numbers') }}</label>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}">
        </div>
        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}">
        </div>

        <div class="mb-3">
        <div class="container">
        <div class="row">
        <div class="col-md-9">
            <button type="submit" class="btn btn-dark">
                <span>{{ __('Register') }}</span>
            </button>
        </div>
        <div class="col-md-3">
            <a class="nav-link" href="{{ url('login') }}">{{ __('Login') }}</a>                
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
