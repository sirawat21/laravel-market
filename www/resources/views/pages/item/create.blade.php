@extends('c-layouts.main') 
@section('title', 'Create Item') 
@section('content')
<h2>
    <span class="fa fa-gavel"></span> Create Item
</h2>
<div class="row">
<!-- Notification Message -->
@include('c-components.notification-bar', ['status' => 'info'])
<div class="col-md-12">
<div class="card c-box-shadow">
<div class="card-body">
   <!-- Form Create Item -->
    <form method="POST" action="{{ url('item') }}" enctype="multipart/form-data">
        @csrf
        <!-- Inner container -->
        <div class="container">
            <!-- Inner row -->
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-6 col-sm-12">
               <!-- Name -->
               <div class="mb-3 input-group">
                  <div class="input-group-prepend">
                     <label for="name" class="form-label input-group-text">{{ __('Item Name') }}</label>
                  </div>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <input name="name" type="text" 
                     class="form-control @error('name') is-invalid @enderror" 
                     id="name" value="{{ old('name') }}">
               </div>

               <!-- Price -->
               <div class="mb-3 input-group">
                  <div class="input-group-prepend">
                     <label for="price" class="form-label input-group-text">{{ __('Price') }}</label>
                  </div>
                  @error('price')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <input name="price" type="number" style="text-align: right;"
                     class="form-control @error('price') is-invalid @enderror" 
                     id="price" value="{{ old('price') }}">
                  <div class="input-group-append">
                     <span class="input-group-text">AUD</span>
                  </div>
               </div>

               <!-- Manufacturer -->
               <div class="mb-3 input-group">
                  <div class="input-group-prepend">
                     <label for="manufacturers_id" class="form-label input-group-text">{{ __('Manufacturer') }}</label>
                  </div>
                  <select class="form-control" name="manufacturers_id" id="manufacturers_id">
                     @foreach($manufacturers as $manufacturer)
                     @if ($loop->index == 0)
                     <option value="{{ $manufacturer->id }}" selected>
                        {{ $manufacturer->name }}
                     </option>
                     @endif
                     <option value="{{ $manufacturer->id }}">
                        {{ $manufacturer->name }}
                     </option>
                     @endforeach
                  </select>
               </div>

               <!-- Origin Link -->
               <div class="mb-3 input-group">
                  <div class="input-group-prepend">
                     <label for="origin_link" class="form-label input-group-text">{{ __('Original URL') }}</label>
                  </div>
                  @error('origin_link')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  <input name="origin_link" type="url" 
                     class="form-control @error('origin_link') is-invalid @enderror" 
                     id="origin_link" value="{{ old('origin_link') }}"
                     placeholder="https://www.example.com/item/x">
                </div>
                </div>
                <!-- End Column 1 -->

                <!-- Column 2 -->
                <div class="col-md-6 col-sm-12">
                  <!-- Item Infomation TextArea Form -->
                  <div class="mb-3">
                     <label for="description" class="form-label">{{ __('Description') }}</label>
                     @error('description')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                     <textarea name="origin_link" type="url" style="min-height: 168px;"
                        class="form-control @error('description') is-invalid @enderror" 
                        id="description" value="{{ old('description') }}"></textarea>
                  </div>
                </div>
                <!-- End Column 3 -->
                <div class="col-md-12 col-sm-12">
                    <!-- Image upload -->
                    @include('c-components.form-upload')
                </div>
                <!-- End Column 3 -->
                <!-- End Column 4 -->
                <div class="col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-dark">
                        <span class="fa fa-bullhorn"></span>&nbsp;
                        <span>
                            Post Item
                        </span>
                    </button>
                </div>
                <!-- End Column 4 -->
            <div>
            <!-- End Inner Row -->
        </div>
        <!-- End Inner Container-->    
   </form>
   <!-- End Form Create Item -->
   </div>
   </div>
   </div>
</div>
@endsection