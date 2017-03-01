@extends('layouts.master')
@section('title', 'Detail Pemesanan No {{ $order->order_id }} - myKopsis')

@section('heading')
  <center><b>Pemesanan {{ $order->order_id }}</b></center>
@endsection
@section('content')
<div class="content-wrapper">
  <h1 class="white"><center><b>Detail Pemesanan</b></center></h1><br>
<div class="col-md-7">
  <center><h3><b>Pesanan Produk</b></h3></center>
    <table class="table">
      <tr>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Harga Satuan</th>
        <th>Subtotal</th>
      </tr>
      @foreach($order->items as $item)
      <tr>
        <td>{{ $item->product_id }}</td>
        <td>{{ \App\Product::find($item->product_id)->product_name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>Rp.{{ number_format($item->selling_price) }}</td>
        <td>Rp.{{ number_format($item->total_payment) }}</td>
      </tr>
      @endforeach
      <tr>
          <td colspan="3"></td>
          <td>Total Harga</td>
          <td>Rp. {{ $order->total_payment }}</td>

      </tr>
    </table>
</div>
<div class="col-md-offset-7" style="position:relative;top:5px;">
  <br><br>
  <table class="info-table" border="0">
    <tr>
      <td class="info-left"><span class="info-caption">ID order</span></td>
    </tr>
    <tr>
      <td class="info-right">{{ $order->order_id }}</td>
    </tr>
    <tr>
      <td><span class="info-caption">ID Pemesan</span></td>
    </tr>
    <tr>
      <td>{{ $order->member_id }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Username Pemesan</span></td>
    </tr>
    <tr>
      <td>{{ $order->member->username }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Total Tagihan</span></td>
    </tr>
    <tr>
      <td>Rp.{{ number_format($order->total_payment) }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Waktu Pemesanan</span></td>
    </tr>
    <tr>
      <td>{{ $order->created_at }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Status</span></td>
    </tr>
    <tr>
      <td>{{ $order->status }}</td>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
      <td><span class="info-caption">Metode Pembayaran</span></td>
    </tr>
    <tr>
      <td>{{ $order->payment_method }}</td>
    </tr>
    <tr>
      <td></td>
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
</div>
</div>
@endsection
