@extends('layouts.master')
@section('title', 'Manajemen Anggota - myKopsis')
@section('heading', 'Manajemen Anggota Koperasi')
@section('content')
@include('layouts.alert')

<table class="table">
  <tr>
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
    <td><p>{{ $member->member_id }}</p></td>
    <td><p>{{ $member->fullname }}</p></td>
    <td><p>{{ $member->username }}</p></td>
    <td><p>{{ $member->gender }}</p></td>
    <td><p>{{ $member->birthdate }} - {{ $member->birthmonth }} - {{ $member->birthyear }}</p></td>
    <td><p>{{ $member->email }}</p></td>
    <td><p>{{ $member->phone }}</p></td>
    <td><p>{{ $level }}</p></td>
    <td>
      <a href="/admin/anggota/{{ $member->id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/anggota/{{ $member->id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach

  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addline"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Akun Baru</b></center></td>
  </tr>
</table>
@include('admin.anggota.add')
@endsection
