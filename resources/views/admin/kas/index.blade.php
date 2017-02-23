@extends('layouts.master')
@section('title', 'Manajemen Pemesanan - myKopsis')
@section('heading', 'Manajemen Pemesanan Koperasi')
@section('content')
@include('layouts.alert')

<table class="table">
  <tr>
    <th>ID Pemesanan</th>
    <th>ID Pemesan</th>
    <th>Total Pembayaran</th>
    <th>Waktu Pemesanan</th>
    <th>Status</th>
    <th>Metode Pembayaran</th>
    <th>Action</th>
  </tr>
<?php $y= 1;?>
  @foreach($orders as $order)
  <tr>
    <td><p>{{ $order->order_id }}</p></td>
    <td><p>{{ $order->member_id }}</p></td>
    <td><p>{{ $order->total_payment }}</p></td>
    <td><p>{{ $order->order_date }}</p></td>
    <td><p>{{ $order->sstatus }}</p></td>
    <td><p>{{ $order->payment_method }}</p></td>
    <td>
      <a href="/admin/pemesanan/{{ $order->id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/pemesanan/{{ $order->id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach

  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addline"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Produk Baru</b></center></td>
  </tr>
</table>
@include('admin.pemesanan.add')
@endsection
