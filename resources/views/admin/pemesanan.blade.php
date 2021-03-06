@extends('layouts.master')
@section('title', 'Manajemen Pemesanan - myKopsis')
@section('heading', 'Manajemen Pemesanan Koperasi')
@section('content')
@include('layouts.alert')

<table class="table">
  <tr>
    <th>ID Pemesanan</th>
    <th>ID Pemesan</th>
    <th>Username Pemesan</th>
    <th>Total Tagihan</th>
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
    <td><p>{{ $order->member->username }}</p></td>
    <td><p>Rp.{{ number_format($order->total_payment) }}</p></td>
    <td><p>{{ $order->created_at }}</p></td>
    <td><p>{{ $order->status }}</p></td>
    <td><p>{{ $order->payment_method }}</p></td>
    <td>
      <a href="/admin/pemesanan/{{ $order->order_id }}/details">
        <button type="button" class="small btn btn-success"><span class="small glyphicon glyphicon-search"></span></button>
      </a>
      <a href="/admin/pemesanan/{{ $order->order_id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>

    </td>
  </tr>
  @endforeach

</table>
@endsection
