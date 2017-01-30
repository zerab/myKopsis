<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Product;

class katalogController extends Controller
{
    function index()
    {
    $products = Product::all();
    return view('katalog.index', ['products' => $products]);
    }
}
