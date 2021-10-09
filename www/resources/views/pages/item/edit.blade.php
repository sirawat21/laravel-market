@php
   use App\Models\Manufacturers;
   $manufacturers = Manufacturers::All();
   $manufacturerOldId = Manufacturers::find($item->manufacturers_id)->id;
@endphp
@extends('c-layouts.main') 
@section('title', 'Edit')
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
      <!-- Delete Link -->
      @auth
        @if (Auth::user()->id == $item->users_id || Auth::user()->type == "moderator")
          <form method="POST" action="{{ url('item/'.$item->id) }}">
                @method('delete')
                @csrf
                <input type="hidden" value="{{ $item->id }}">
                <button type="submit" class="btn btn-sm btn-outline-danger">
                  <span class="fa fa-trash"></span>
                  Remove Post
                </button>
          </form>
        @endif
      @endauth
      <!-- Delete Link -->
      </div>
    <div class="card-body">
      @include('c-components.image-slideshow', ['imgs' => $item_imgs])
      <!-- Edit Form -->
      <form method="post" action="{{ url('item/'.$item->id) }}">
      @csrf
      @method('put')
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Item Name</th>
            <td>
              <input name="name" type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                id="name" value="{{ $item->name }}">
            </td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td>
              <input name="price" type="text" style="text-align: right;"
                 class="form-control @error('price') is-invalid @enderror" 
                 id="price" value="{{ $item->price }}">
            </td>
          </tr>
          <tr>
            <th scope="row">Manufacturers</th>
            <td>
              <select class="form-control" name="manufacturers_id" id="manufacturer">
                @foreach($manufacturers as $manufacturer)
                @if ($manufacturerOldId == $manufacturer->id)
                    <option value="{{ $manufacturer->id }}" selected>
                        {{ $manufacturer->name }}
                    </option>
                @endif
                <option value="{{ $manufacturer->id }}">
                    {{ $manufacturer->name }}
                </option>
                @endforeach
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">Detail</th>
            <td>
            <textarea name="description" type="url" style="min-height: 168px;"
              class="form-control @error('description') is-invalid @enderror" 
              id="description">{{ $item->description }}</textarea>
            </td>
          </tr>
          <tr>
            <th scope="row">Original URL</th>
            <td>
            <input name="origin_link" type="url" 
              class="form-control @error('origin_link') is-invalid @enderror" 
              id="origin_link" value="{{ $item->origin_link }}">
            </td>
          </tr>
          <tr>
            <th scope="row">Posted</th>
            <td>{{ $item->updated_at }}</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-dark">
        <span class="fa fa-caret-square-down"></span>
        &nbsp;
        <span>Save</span>
      </button>
      </form>
      <!-- End Edit Form -->
    </div>
    </div>
  </div>
</div>
@endsection


