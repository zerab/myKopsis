@extends('layouts.master')
@section('title','Home - myKopsis')
<?php $user = Auth::user();?>
@section('content')
<h1>
  @if ($alert = Session::get('alert-success'))
  <div class="alert alert-warning dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ $alert }}
  </div>
@endif
@if ($alert = Session::get('alert-success-register'))
<div class="alert alert-warning dismissable fade-in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ $alert }}
</div>
@endif
@endsection
