@extends('layouts.akun')
@section('title', 'Konfirmasi Hapus Akun - myKopsis')
@section('content')
<div class="akun-index">
<center><h1>Apakah anda yakin mau menghapus akun orang ini?<br><span class="glyphicon glyphicon-trash akun-cart"></span></h1></center>
<br>
<div class="akun-index-left">
<center>
  <?php
  if(auth()->check() == true) {
      $akun = '/'.$id;
  }
  else {
      $akun = '';
  }
  ?>
  <form action="/admin/anggota{{ $akun }}/hapus" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
  <h2><input type="submit" class="red-hover" value="Ya, hapus akun ini"></h2>
  </form>
  </center>
</div>
<div class="akun-index-right-blue">
  <center>
  <a href="/admin/anggota"><div class="akun-index-foot blue-hover">
    <h2>Tidak, saya berubah pikiran</h2>
  </div>
</a>
  </center>
</div>
@endsection
