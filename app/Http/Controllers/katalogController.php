<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Use App\Product;

class katalogController extends Controller
{
    function index()
    {
    $products = Product::paginate(9);
    return view('katalog.index', ['products' => $products]);
    }
}
