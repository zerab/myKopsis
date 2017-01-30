@extends('layout.master')
@section('title', 'Katalog Barang - myKopsis')
@section('content')
@foreach ($products as $product)
<div class="col-xs-6 col-md-4">
  <a href="product/">
    <div class="card">
    <div  class="thumbnail">
  <figure>
      <img src="images/5432935-minimalist-wallpaper.png" alt="...">
      <figcaption>
        <div class="card-title">
          <p>
            {{ $product->ProductName }}<br>
            <span class="card-desc">
              Harga : {{ $product->SellingPrice }}<br>
              Stock : {{ $product->Stock }}<br>
              Status : {{ $product->StatusAvailable }}
            </span>
          </p>
        </div>
      </figcaption>
</figure>
    {{ $product->ProductName }}
  </div>
</div>
  </a>
</div>
@endforeach
@endsection
