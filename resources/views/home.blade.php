@extends('layouts.master')
@section('title','Home - myKopsis')
<?php $user = Auth::user();?>
@section('content')
@include('layouts.alert')
@endsection
