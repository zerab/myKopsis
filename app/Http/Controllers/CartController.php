<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Item;
use Cart;

class CartController extends Controller
{
    public function index()
    {
      return view('katalog.cart');
    }
    public function add($id)
    {
      $product = Product::find($id);
      Cart::add([
          'id' => $product->id,
          'name' => $product->product_name,
          'qty' => 1,
          'price' => $product->selling_price
      ]);
      return redirect('/katalog')->with('alert-success-add-cart', 'Berhasil memasukkan barang ke keranjang.');
    }
    public function editQty($rowId)
    {
      Cart::update($rowId, request('qty'));
      return redirect('/keranjang')->with('alert-success-update-cart', 'Berhasil memperbaharui data.');
    }

    public function removeRow($rowId)
    {
      Cart::remove($rowId);
      return redirect('/keranjang');
    }
    public function store()
    {
      $validator = $this->validate(request(), [
        'payment_method' => 'required'
      ]);
      $contents = Cart::content();
      $subtotal = Cart::subtotal($decimals = 0, $decimalSeparator = '', $thousandSeparator = '');
      $order = Order::create([
        'member_id' => auth()->id(),
        'total_payment' => $subtotal,
        'status' => 'waiting',
        'payment_method' => request('payment_method')
      ]);
      foreach ($contents as $content) {
          Item::create([
            'order_id' => $order->order_id,
            'product_id' => $content->id,
            'quantity' => $content->qty,
            'selling_price' => $content->price,
            'total_payment' => $content->qty * $content->price
          ]);
        }
        Cart::destroy();
        return redirect('/home')->with('alert-success-send-cart', 'Pesanan sudah terkirim.');
      }
      public function destroy()
      {
        Cart::destroy();
        return redirect('/katalog')->with('alert-success-empty-cart', 'Keranjang sudah dikosongkan');
      }
    }
