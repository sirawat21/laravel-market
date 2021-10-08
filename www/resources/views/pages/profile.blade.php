@php
use App\Models\User;
use App\Models\Reviews;
@endphp
@extends('c-layouts.main') 
@section('title', 'Profile') 
@section('content')
<div class="row">

<div class="container">
<h2>
  <span class="fa fa-address-card"></span> Profile
</h2>
<div class="row justify-content-md-center">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">{{ __('Account Info') }}</div>
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
        </div>
    </div>  
    </div>  
</div>
<br>
<h2>
  <span class="fa fa-users"></span> Following
</h2>
<div class="row">
  <div class="col-md-12">
      <!-- Following list -->
      @forelse ($followings as $following)
      @php
          $followed = User::All()->where('id', $following['following']);
      @endphp
      <div class="card" style="width: 15rem; padding:5px 5px 5px 5px; margin: 5px 5px 5px 5px;">
        <a class="link-dark" href="{{ url('profile/'.$followed[1]['id']) }}">
          <h5 class="card-title">{{ $followed[1]['name'] }}</h5>
        </a>
        <p class="card-text">
          {{ $followed[1]['email'] }}
        </p>
        <a href="#" class="btn btn-secondary">See Reviews</a>
      </div>
      @empty
        No following user.
      @endforelse
      <!-- End Following list -->
  </div>
</div>
    
</div>
</div> 
@endsection