@extends('c-layouts.main') 
@section('title', 'My Items') 
@section('content')
<h2>
  <span class="fa fa-book"></span> My Items
</h2>
<div class="row"> 
  {{ $id }}
</div> 
@endsection