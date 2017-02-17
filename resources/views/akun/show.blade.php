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
      <td class="info-left">ID Member</td>
      <td class="info-mid">:</td>
      <td class="info-right">{{ $member->member_id }}</td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td>{{ $member->fullname }}</td>
    </tr>
    <tr>
      <td>Username</td>
      <td>:</td>
      <td>{{ $member->username }}</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>{{ $member->gender }}</td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td>{{ $member->birthdate }} - {{ $member->birthmonth }} - {{ $member->birthyear }}</td>
    </tr>
    <tr>
      <td>Alamat Email</td>
      <td>:</td>
      <td>{{ $member->email }}</td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td>:</td>
      <td>{{ $member->phone }}</td>
    </tr>
  </table>
</div>
</div>
@endforeach
@endsection
