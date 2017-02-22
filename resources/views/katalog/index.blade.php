@extends('layouts.master')
@section('title', 'Katalog Barang - myKopsis')
@section('heading')
<b><center>Katalog Barang</center><b>
@endsection
@section('content')
<center><h1 class="white">Mau beli apa hari ini?</h1></center>
@foreach ($products as $product)
<?php if($product->status_available == 'Hidden'){

} else {?>
<div class="col-xs-6 col-md-4">
  <a href="product/">
    <div class="card">
    <div  class="thumbnail">
  <figure>
      <img src="images/business-wallpaper-13.jpg" alt="...">
      <figcaption>
        <div class="card-title">
          <p>

            {{ $product->product_name }}<br>
            <span class="card-desc">
              Harga : {{ $product->selling_price }}<br>
              Stock : {{ $product->stock }}<br>
            <?php if($product->status_available == 'Ada'){?>
              <span class="status-available">{{ $product->status_available }}</span><?php } ?>
            <?php if($product->status_available == 'Kosong'){?>
              <span class="status-kosong">{{ $product->status_available }}</span><?php } ?>
            </span>
          </p>
        </div>
      </figcaption>
</figure>
    <div class="card-caption">{{ $product->product_name }}</div>
  </div>
</div>
  </a>
</div>
<?php } ?>

@endforeach
@endsection
