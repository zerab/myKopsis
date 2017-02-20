@extends('layouts.akun')
@section('title', 'Konfirmasi Hapus Akun - myKopsis')
@section('content')
<div class="akun-index">
<center><h1>Apakah anda yakin mau menghapus akun anda?<br><span class="glyphicon glyphicon-trash akun-cart"></span></h1></center>
<br>
<div class="akun-index-left">
<center>
  <?php
  if(auth()->check() == true) {
      $akun = '/'.auth()->user()->id;
  }
  else {
      $akun = '';
  }
  ?>
  <form action="/akun{{ $akun }}/hapus" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
  <h2><input type="submit" class="red-hover" value="Ya, hapus akun saya"></h2>
  </form>
  </center>
</div>
<div class="akun-index-right-blue">
  <center>
  <a href="/akun{{ $akun }}"><div class="akun-index-foot blue-hover">
    <h2>Tidak, saya berubah pikiran</h2>
  </div>
</a>
  </center>
</div>
@endsection
