@extends('c-layouts.main') 
@section('title', 'Error') 
@section('content')

<div class="row justify-content-md-center"> 
  <div>
    <h1 class="text-danger">
      <span class="fas fa-bug"></span>&nbsp;
      <span>
        Oop.. System is failed to be processed.
      </span>
    </h1>
    <p class="text-secondary" style="font-size:28px;">{{ $err_message }}</p>
    <hr>
    <p class="mb-0">Processed at {{ date("Y-m-d H:i:s", time()) }}</p>
  </div>
</div> 
@endsection