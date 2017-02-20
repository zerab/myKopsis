@extends('layouts.master')
@section('title', 'Akun Anda - myKopsis')

@section('heading')
@foreach ($members as $member)
  <center><b>{{ $member->fullname }}</b></center>
@endsection
@section('content')
<div class="content-wrapper">
  <h1 class="white"><center><b>Informasi Akun</b></center></h1><br>
<div class="col-md-2 col-md-offset-2">
    <span class="glyphicon glyphicon-user profile-icon"></span>
</div>
<div class="col-md-offset-6">
  <table class="info-table" border="0">
    <tr>
      <td class="info-left"><span class="info-caption">ID Member</span></td>
    </tr>
    <tr>
      <td class="info-right">{{ $member->member_id }}</td>
    </tr>
    <tr>
      <td><span class="info-caption">Nama Lengkap</span></td>
    </tr>
    <tr>
      <td>{{ $member->fullname }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Username</span></td>
    </tr>
    <tr>
      <td>{{ $member->username }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Jenis Kelamin</span></td>
    </tr>
    <tr>
      <td>{{ $member->gender }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Tanggal Lahir</span></td>
    </tr>
    <tr>
      <td>{{ $member->birthdate }} - {{ $member->birthmonth }} - {{ $member->birthyear }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Alamat Email</span></td>
    </tr>
    <tr>
      <td>{{ $member->email }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Nomor Telepon</span></td>
    </tr>
    <tr>
      <td>{{ $member->phone }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <?php
      if(auth()->user()->level == 'A') {
        $level = 'Admin';
      } else {
        $level = 'Anggota';
      }?>
    <tr>
    <td><span class="info-caption">Status</span></td>
  </tr>
  <tr>
    <td>{{ $level }}</td>
  </tr>
  <tr>
  <td></td>  
  </tr>
  </table>
</div>

<div class="col-md-4 col-md-offset-5">
  <?php
  if(auth()->check() == true) {
      $akun = '/'.auth()->user()->id;
  }
  else {
      $akun = '';
  }
  ?>
<center>
  <a href="/akun{{ $akun }}/edit" method="get" class="acc-op">
    <button type="button" class="btn btn-primary btn-lg" value="Edit Akun">Edit Akun</button>
  </a>
  <a href="/akun{{ $akun }}/hapus" method="get" class="acc-op">
    <button type="button" class="btn btn-danger btn-lg" value="Hapus Akun">Hapus Akun</button>
  </a>
</center>
</div>
</div>
@endforeach
@endsection
