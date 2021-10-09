@extends('c-layouts.main') 
@section('title', 'Item Detail')
@section('head')
  <link href="{{ asset('css/custom-item-show.css') }}" rel="stylesheet">
@endsection

@section('content')
@include('c-components.btn-nav-back')
<div class="row">
  <div class="col-md-12">
    <div class="card c-box-shadow">
      <div class="head-item">
        <span class="head-item-font">{{ $item->name }}</span>
      <!-- Edit Link -->
      @auth
        @if (Auth::user()->type == "moderator")
          <a type="button" href='{{ url("item/$item->id/edit") }}'
            class="btn btn-sm btn-outline-warning">
            <span class="fa fa-wrench"></span>
            Edit
          </a>
        @endif
      @endauth
      <!-- End Edit Link -->
      </div>
    <div class="card-body">
      @include('c-components.image-slideshow', ['imgs' => $item_imgs])
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Name</th>
            <td>
              {{ $item->name }}
              @if ($item->origin_link != "")
                  &emsp;
                  <a href="{{ $item->origin_link }}" target="_blank">
                    <span class="fa fa-link">
                    </span>
                    <span>origin</span>
                  </a>
              @endif
            </td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td>{{ number_format($item->price, 2) }}&nbsp;AUD</td>
          </tr>
          <tr>
            <th scope="row">Seller</th>
            <td>            
                {{ $owner->name }}
                  &emsp;
                  <a href="{{ url('profile/'.$owner->id) }}">
                    <span class="fa fa-link">
                    </span>
                    <span>profile</span>
                  </a>
            </td>
          </tr>
          <tr>
            <th scope="row">Manufacturer</th>
            <td>{{ $manufacturer->name }}</td>
          </tr>
          <tr>
            <th scope="row">Detail</th>
            <td>{{ $item->description }}</td>
          </tr>
          <tr>
            <th scope="row">Posted</th>
            <td>{{ $item->updated_at }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
<!-- Reviews -->
<div class="row">
  @auth
  <div class="col-md-12">
    @include('c-components.review-create-form')
  </div>
  @endauth
  @include('c-components.reviews')
</div>

<!-- Reviews -->
@endsection


