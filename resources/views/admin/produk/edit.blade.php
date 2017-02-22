<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
@extends('layouts.header')
@section('title', 'Perbarui Informasi - myKopsis')
@section('heading')
@endsection
@section('plain-content')
<div class="register-wrapper">
  <center><h3>Perbarui Informasi</h3></center>
  <?php
    $id = $product->id;
  ?>
  <form action="/admin/produk/{{ $id }}/update" method="POST" class="form login" autocomplete="on">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <div class="form__field">
            <span class="hidden">Nama Produk</span>
            <input type="text" name="product_name" class="form__input" placeholder="Nama Produk" value="{{ $product->product_name }}" required>
          </div>

          <div class="form__field">
            <span class="hidden">Kategori</span>
            <select class="form__input" name="category">
              <option>Kategori</option>
              <option value="makanan" <?php if ($product->category == "makanan") {echo 'selected="selected"';} ?>>Makanan</option>
              <option value="minuman" <?php if ($product->category == "minuman") {echo 'selected="selected"';} ?>>Minuman</option>
              <option value="perlengkapan" <?php if ($product->category == "perlengkapan") {echo 'selected="selected"';} ?>>Perlengkapan Sekolah</option>
              <option value="lain" <?php if ($product->category == "lain") {echo 'selected="selected"';} ?>>Lain-lain</option>
            </select>
          </div>

          <div class="form__field">
            <span class="hidden">Harga Beli</span>
            <input type="number" name="purchase_price" class="form__input" maxlength="11" placeholder="Harga Beli" value="{{ $product->purchase_price }}" required>
          </div>

          <div class="form__field">
            <span class="hidden">Harga Jual</span>
            <input type="number" name="selling_price" class="form__input" maxlength="11" placeholder="Harga Jual" value="{{ $product->selling_price }}" required>
          </div>

          <div class="form__field">
            <span class="hidden">Stock</span>
            <input type="number" name="stock" class="form__input" placeholder="Stok" value="{{ $product->stock }}" required>
          </div>

          <div class="form__field">
            <span class="hidden">Status Tersedia</span>
            <select class="form__input" name="status_available">
              @if($product->status_available == "Ada")
              <option value="Ada" selected="selected">Ada</option>
              @elseif($product->status_available == "Kosong")
              <option value="Kosong" selected="selected">Kosong</option>
              @endif
              <option value="Hidden" <?php if ($product->status_available == "Hidden") {echo 'selected="selected"';} ?>>Sembunyikan</option>
            </select>
          </div>

          <div class="form__field">
            <input type="submit" value="Perbarui">
          </div>
        </form>
    </div>
    @include('layouts.error')
@endsection
