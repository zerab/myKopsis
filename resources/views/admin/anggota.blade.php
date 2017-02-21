
@extends('layouts.master')
@section('title', 'Manajemen Anggota - myKopsis')
@section('heading', 'Manajemen Anggota Koperasi')
@section('content')
<table class="table table-hover">
  <tr>
    <th>#</th>
    <th>ID</th>
    <th>Nama Lengkap</th>
    <th>Username</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Lahir</th>
    <th>Alamat Email</th>
    <th>Nomor Telepon</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
<?php $y= 1;?>
  @foreach($members as $member)
  <?php
    if($member->level == 'A') {
      $level = 'Admin';
    } else {
      $level = 'Anggota';
    }?>
  <tr>
    <td>{{ $y++ }}</td>
    <td>{{ $member->member_id }}</td>
    <td>{{ $member->fullname }}</td>
    <td>{{ $member->username }}</td>
    <td>{{ $member->gender }}</td>
    <td>{{ $member->birthdate }} - {{ $member->birthmonth }} - {{ $member->birthyear }}</td>
    <td>{{ $member->email }}</td>
    <td>{{ $member->phone }}</td>
    <td>{{ $level }}</td>
    <td>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span></button>
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
    </td>
  </tr>
  @include('admin.anggota.edit')
  @endforeach
</table>

@endsection
