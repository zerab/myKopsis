@extends('layouts.master')
@section('title','Home - myKopsis')
<?php $user = Auth::user();?>
@section('content')
<h1>
  {{ $user }}
  <a href="/logout"><button>logout</button></a>
@endsection
