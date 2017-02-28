profit<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@extends('layouts.header')
@section('title', 'Perbarui Informasi - myKopsis')
@section('heading')
@endsection
@section('plain-content')
<?php
    $id = $profit->profit_id;
?>
<div class="register-wrapper">
  <center><h3>Perbarui Informasi</h3></center>
<form action="/admin/keuangan/laba/{{ $id }}/update" method="POST" class="form login" autocomplete="on">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <div class="form__field">
            <span class="hidden">Total Keuntungan</span>
            <input type="number" name="total_profit" class="form__input" placeholder="Total Keuntungan" value="{{ $profit->total_profit }}" required>
          </div>

          <div class="form__field">
            <span class="hidden">Rincian</span>
            <input type="textarea" name="details" maxlength="500" class="form__input" value="{{ $profit->details }}" placeholder="Rincian">
          </div>
          <div class="form__field">
            <input type="submit" value="PERBARUI">
          </div>
        </form>
    </div>
    @include('layouts.error')
@endsection
