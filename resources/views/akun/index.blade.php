@extends('layouts.akun')
@section('title', 'Akun - myKopsis')
@section('heading')
@endsection
@section('content')
<div class="akun-index">
<center><h1>Sudah siap berbelanja?<br><span class="glyphicon glyphicon-shopping-cart akun-cart"></span></h1></center>
<br>
<div class="akun-index-left">
<center>
<div class="akun-index-head">
  <h3>Sudah punya akun?</h3>
</div>
<a href="/login"><div class="akun-index-foot">
  <h2>Masuk</h2>
</div>
</a>
</center>
</div>
<div class="akun-index-right">
  <center>
  <div class="akun-index-head">
    <h3>Belum punya akun?</h3>
  </div>
  <a href="/register"><div class="akun-index-foot">
    <h2>Daftar</h2>
  </div>
</a>
  </center>
</div>

</div>
@endsection
