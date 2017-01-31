@extends('layout.master')
@section('title', 'Katalog Barang - myKopsis')
@section('content')
<center><h1>Mau beli apa hari ini?</h1></center>
@foreach ($products as $product)
<?php if($product->StatusAvailable == 'Hide'){

} else {?>
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
            <?php if($product->StatusAvailable == 'Ada'){?>
              <span class="status-available">{{ $product->StatusAvailable }}</span><?php } ?>
            <?php if($product->StatusAvailable == 'Kosong'){?>
              <span class="status-kosong">{{ $product->StatusAvailable }}</span><?php } ?>
            </span>
          </p>
        </div>
      </figcaption>
</figure>
    <div class="card-caption">{{ $product->ProductName }}</div>
  </div>
</div>
  </a>
</div>
<?php } ?>

@endforeach
@endsection
