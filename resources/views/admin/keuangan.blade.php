@extends('layouts.master')
@section('title', 'Manajemen Keuangan - myKopsis')
@section('heading', 'Manajemen Keuangan Koperasi')
@section('content')
<div class="admin-menu">
  <div class="admin-title">
    <center><h1><b>Manajemen Keuangan Koperasi</b></h1></center>
  </div>
  <div class="admin-menu-list-keuangan">
    <center>
      <a href="/admin/keuangan/pemasukan-pengeluaran"><div class="admin-menu-item"><span class="glyphicon glyphicon-retweet menu-logo"></span><br><center>Manajemen<br>Pemasukan & Pengeluaran</center></div></a>
      <a href="/admin/keuangan/kas"><div class="admin-menu-item"><span class="glyphicon glyphicon-piggy-bank menu-logo"></span><br><center>Manajemen Kas</center></div></a>
      <a href="/admin/keuangan/laba-rugi"><div class="admin-menu-item"><span class="glyphicon glyphicon-sort menu-logo"></span><br><center>Manajemen Laba & Rugi</center></div></a>
    </center>
  </div>
</div>
@endsection
