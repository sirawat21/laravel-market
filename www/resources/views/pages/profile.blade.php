@php
use App\Models\User;
use App\Models\Reviews;
@endphp
@extends('c-layouts.main') 
@section('title', 'Profile') 
@section('content')
<div class="row">
@include('c-components.btn-nav-back')
<div class="container">
<h2>
  @if ($owner)
    <span class="fa fa-address-card"></span> My Profile
  @else
    <span class="fa fa-address-card"></span> Profile
  @endif
</h2>
<div class="row justify-content-md-center">
    <div class="col-md-12">
    <div class="card c-box-shadow">
        <div class="card-header">
          {{ __('Account Info') }}
        </div>
        <div class="card-body">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Name</th>
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <th scope="row">Account Type</th>
                <td>{{ $user->type }}</td>
              </tr>
              <tr>
                <th scope="row">Phone</th>
                <td>{{ $user->phone }}</td>
              </tr>
              <tr>
                <th scope="row">Address</th>
                <td>{{ $user->address }}</td>
              </tr>
              <tr>
                <th scope="row">Register Date</th>
                <td>{{ $user->created_at }}</td>
              </tr>
            </tbody>
          </table>
          <!-- Following form -->
          @auth
          @if (!$owner)
            @if ($followed)
              <!-- Unfollow Button -->
              @include('c-components.unfollow', ['id' => $current_profile_id])
            @else
              <!-- Follow Button -->
              @include('c-components.follow')
            @endif
          @endif
          @endauth
          <!-- End Following form -->
        </div>
    </div>  
    </div>  
</div>
<br>

<h2>
  <span class="fa fa-users"></span> Following
</h2>
<div class="row">
      <!-- Following list -->
      @forelse ($followings as $following)
      @php
          $followeds = User::All()->where('id', $following['following'])->toArray();
      @endphp
      <div class="card card-follower c-box-shadow">
        @foreach ($followeds as $followed)
        <a class="link-dark not-href" href="{{ url('profile/'.$followed['id']) }}">
          <h5 class="card-title">
            {{ $followed['name'] }}
            &nbsp;
            <span class="fa fa-arrow-right">
            </span>
          </h5>
        </a>
        <!-- Unfollow Button -->
        @if ($owner)
          @include('c-components.unfollow', ['id' => $followed['id']])
        @endif
        <!-- End Unfollow Button -->
        <p class="card-text">
          <b>Email:&nbsp;</b>{{ $followed['email'] }}
          <br>
          <b>Phone:&nbsp;</b>{{ $followed['phone'] }}
          <br>
          <b>Account Type:&nbsp;</b>{{ $followed['type'] }}
        </p>
        <a href="#" class="btn btn-secondary">See Reviews</a>
        @endforeach
      </div>
      @empty
        <div class="alert alert-light" role="alert">
          <span class="fa fa-exclamation"></span>&nbsp;  
          <span>No Following lists.</span>
        </div>
      @endforelse
      <!-- End Following list -->
</div>
    
</div>
</div> 
@endsection