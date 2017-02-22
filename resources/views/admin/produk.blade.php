@extends('layouts.master')
@section('title', 'Manajemen Produk - myKopsis')
@section('heading', 'Manajemen Produk Koperasi')
@section('content')
@include('layouts.alert')

<table class="table">
  <tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Harga Tambahan</th>
    <th>Stok</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
<?php $y= 1;?>
  @foreach($products as $product)
  <tr>
    <td><p>{{ $product->product_id }}</p></td>
    <td><p>{{ $product->product_name }}</p></td>
    <td><p>{{ $product->category }}</p></td>
    <td><p>{{ $product->purchase_price }}</p></td>
    <td><p>{{ $product->selling_price }}</p></td>
    <td><p>{{ $product->additional_price }}</p></td>
    <td><p>{{ $product->stock }}</p></td>
    <td><p>{{ $product->status_available }}</p></td>
    <td>
      <a href="/admin/produk/{{ $product->id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/produk/{{ $product->id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach

  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addline"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Produk Baru</b></center></td>
  </tr>
</table>
@include('admin.produk.add')
@endsection
