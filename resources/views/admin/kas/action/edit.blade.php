<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@extends('layouts.header')
@section('title', 'Perbarui Informasi - myKopsis')
@section('heading')
@endsection
@section('plain-content')
<?php
    $id = $cash->id;
?>
<div class="register-wrapper">
  <center><h3>Perbarui Informasi</h3></center>
<form action="/admin/keuangan/kas/{{ $id }}/update" method="POST" class="form login" autocomplete="on">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <div class="form__field">
            <span class="hidden">Total Kas</span>
            <input type="number" name="total_cash" class="form__input" placeholder="Total Kas" value="{{ $cash->total_cash }}" required>
          </div>

          <div class="form__field">
            <span class="hidden">Rincian</span>
            <input type="textarea" name="username" maxlength="500" class="form__input" value="{{ $cash->details }}" placeholder="Rincian">
          </div>
          <div class="form__field">
            <input type="submit" value="PERBARUI">
          </div>
        </form>
    </div>
    @include('layouts.error')
@endsection
