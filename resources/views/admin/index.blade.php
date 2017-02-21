@extends('layouts.master')
@section('title', 'Administrasi - myKopsis')
@section('heading', 'Administrasi Koperasi')
@section('content')
<div class="admin-menu">
  <div class="admin-title">
    <center><h1>Menu Manajemen</h1></center>
  </div>
  <div class="admin-menu-list">
      <a href="/admin/keuangan"><div class="admin-menu-item"><span class="glyphicon glyphicon-stats menu-logo"></span><br><center>Manajemen Keuangan</center></div></a>
      <a href="/admin/anggota"><div class="admin-menu-item"><span class="glyphicon glyphicon-user menu-logo"></span><br><center>Manajemen Anggota</center></div></a>
      <a href="/admin/produk"><div class="admin-menu-item"><span class="glyphicon glyphicon-tags menu-logo"></span><br><center>Manajemen Produk</center></div></a>
      <a href="/admin/pemesanan"><div class="admin-menu-item"><span class="glyphicon glyphicon-list-alt menu-logo"></span><br><center>Manajemen Pemesanan</center></div></a>
  </div>
</div>
@endsection
