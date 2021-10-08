@extends('c-layouts.main') 
@section('title', 'Market') 
@section('content')
<h2>
  <span class="fas fa-users"></span> Maket
</h2>
<div class="row">
<!-- Content -->

@forelse ($items as $item)
    {{ var_dump($item) }}
@empty
    ! no items in list yet.
@endforelse

<!-- Content -->
</div> 
@endsection