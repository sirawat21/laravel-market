@extends('c-layouts.main') 
@section('title', 'My Items')
@section('head')
  <link href="{{ asset('css/custom-market-style.css') }}" rel="stylesheet">
@endsection
@section('content')
<h2 style="margin-bottom: 30px;">
  <span class="fa fa-shopping-bag"></span> My Items
</h2>
<div class="row">
<!-- Content -->
  @include('c-components.market-items-card', ['items' => $items])
<!-- Content -->
</div> 
@endsection