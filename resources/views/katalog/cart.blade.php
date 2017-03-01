@extends('layouts.cart')
@section('title', 'Keranjang Belanja anda - myKopsis')
@section('heading', 'Keranjang Belanja anda')
@section('plain-content')
@include('layouts.alert')
@if (Cart::total() != 0)
<center><h2><b style="color:rgba(30, 42, 54, 1);">Keranjang Belanja Anda</b></h2></center>
<div class="cart-table">
<table class="table table-cart">
        <tr>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
            <th></th>
        </tr>

        <?php foreach(Cart::content() as $row) :?>
            <tr>
                <td>
                    <div class="td-padding"><strong><?php echo $row->name; ?></strong></div>
                    <div class="td-padding"><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></div>
                </td>
                <td><form class="form-inline" action="/keranjang/update/{{ $row->rowId }}" method="post">
                  <div class="td-padding-action">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
                  <input type="number" style="height:35px;width:40px;text-align:center;" name="qty" value="<?php echo $row->qty; ?>"> <input type="submit" class="btn" style="border-radius:0px;" value="Perbarui"></form></div></td>
                <td><div class="td-padding">Rp.<?php echo number_format($row->price); ?></div></td>
                <td><div class="td-padding">Rp.<?php echo number_format($row->subtotal); ?></div></td>
                <td><form action="/keranjang/remove/{{ $row->rowId }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <div class="td-padding-action"><button type="submit" name="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                </div></form></td>
            </tr>

        <?php endforeach;?>

    </tbody>

    <tfoot>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total Harga</td>
            <td>Rp. <?php echo Cart::subtotal(); ?></td>
            <td></td>
        </tr>
        <form action="/keranjang/kirim" method="post">
        <tr>
          <td colspan="2"></td>
          <td>Metode Pembayaran</td>
          <td colspan="2"><select style="width:100px;" name="payment_method">
                <option value="cash">Cash</option>
                <option value="hutang">Hutang</option>
                <option value="cicil">Cicil</option>
              </select></td>
        </tr>
        <tr>
          <td colspan="3"></td>
          <td>

              {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" name="button">Kirim Pesanan</button>
            </form>
          </td>
          <td><a href="/keranjang/destroy"><button type="submit" class="btn btn-primary" name="button">Batalkan Pesanan</button></a></td>
        </tr>
    </tfoot>
</table>
</div>
@elseif (auth()->check() !== true)
<center><h1><b>Anda harus masuk untuk menggunakan fitur ini</b></h1></center><br>
<div class="no-item-icon">
<span class="glyphicon white glyphicon-log-in"></span>
<a href="/akun"><button type="button" name="button" class="btn belanja blue-hover" style="position:relative;top:120px;left:-150px;">Menuju Halaman akun</button></a>
</div>
@elseif (Cart::total() == 0)
<center><h1><b>Anda belum memiliki item apapun di keranjang</b></h1></center><br>
<div class="no-item-icon">
<span class="glyphicon white glyphicon-shopping-cart"></span>
<span class="glyphicon glyphicon-remove"></span>
<a href="/katalog"><button type="button" name="button" class="btn belanja blue-hover">Belanja sekarang!</button></a>
</div>

@endif
@endsection
