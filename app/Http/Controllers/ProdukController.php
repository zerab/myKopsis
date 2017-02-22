<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view('admin.produk')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $validator = $this->validate(request(), [
        'product_name' => 'required',
        'category' => 'required',
        'purchase_price' => 'required|numeric',
        'selling_price' => 'required|numeric',
        'stock' => 'required|numeric',
      ]);
        $product = Product::create([
            'product_name' => request('product_name'),
            'category' => request('category'),
            'purchase_price' => request('purchase_price'),
            'selling_price' => request('selling_price'),
            'stock' => request('stock')
        ]);
        $product->product_id = $product->id;
        $product->additional_price = $product->selling_price - $product->purchase_price;
        if (request('stock') > 0) {
          $status = 'Ada';
        }
        elseif (request('stock') < 1) {
          $status = 'Kosong';
        }
        $product->status_available = $status;
        $product->save();
        return redirect('/admin/produk')->with('alert-admin-success-add', 'Berhasil Memasukkan data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id);
      return view('admin.produk.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
      $validator = $this->validate(request(), [
        'product_name' => 'required',
        'category' => 'required',
        'purchase_price' => 'required|numeric',
        'selling_price' => 'required|numeric',
        'stock' => 'required|numeric',
      ]);
      $product = Product::find($id);
      $product->product_name = request('product_name');
      $product->category = request('category');
      $product->purchase_price = request('purchase_price');
      $product->selling_price = request('selling_price');
      $product->stock = request('stock');
      $product->save();
      $product->additional_price = $product->selling_price - $product->purchase_price;
      if (request('stock') > 0) {
        $status = 'Ada';
      }
      elseif (request('stock') < 1) {
        $status = 'Kosong';
      }
      if (request('status_available') == "Hidden") {
        $status = 'Hidden';
      }
      $product->status_available = $status;
      $product->save();
      return redirect('/admin/produk')->with('alert-admin-success-edit', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyConfirmation($id)
    {
      return view('admin.produk.confirmation', ['id' => $id]);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/produk')->with('alert-admin-success-delete', 'Produk telah berhasil dihapus');
    }
}
