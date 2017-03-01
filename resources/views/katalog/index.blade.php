@extends('layouts.master')
@section('title', 'Katalog Barang - myKopsis')
@section('heading')
<b><center>Katalog Barang</center><b>
@endsection
@section('content')
@include('layouts.alert')
<center><h1 class="white">Mau beli apa hari ini?</h1></center>
@foreach ($products as $product)
<?php if($product->status_available == 'Hidden'){

} else {?>
<div class="col-xs-6 col-md-4">
    <div class="card">
    <div  class="thumbnail">
  <figure>
      <img src="images/business-wallpaper-13.jpg" alt="...">
      <figcaption>
        <div class="card-title">
          <p>

            {{ $product->product_name }}<br>
            <span class="card-desc">
              Harga : Rp.{{ number_format($product->selling_price) }}<br>
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
    <div class="card-caption">
      @if(auth()->check() == true)
      <a href="/keranjang/add/{{ $product->id }}">
      <button class="glyphicon glyphicon-shopping-cart btn btn-success addtocart"></button></a>
      <button class="glyphicon glyphicon-heart btn addtolove"></button>
      @endif
        <div class="card-sub-caption">
          <b>{{ $product->product_name }}<b><br>
        <span class="card-price"> Rp.{{ number_format($product->selling_price) }}</span>
        </div>
      </div>


  </div>
</div>
</div>
<?php } ?>
@endforeach
<div style="clear:both;">
  <center>{{ $products->links() }}</center>
</div>
@endsection
