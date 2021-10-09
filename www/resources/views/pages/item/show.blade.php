@extends('c-layouts.main') 
@section('title', 'Item Detail') 
@section('content')
<h2>
  <span class="fas"></span> Item Detail
</h2>
<div class="row">
  {{ var_dump($item_imgs) }}
  {{ var_dump($item) }}
</div> 
@endsection