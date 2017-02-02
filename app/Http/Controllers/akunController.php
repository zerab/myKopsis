<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akunController extends Controller
{
    function index()
    {
      return view('akun.index');
    }
}
