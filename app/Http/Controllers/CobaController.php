<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Member;

class CobaController extends Controller
{

    /*public function loginMember()
    {
      $credentials = array([
        'username' => request('username'),
        'password' => request('password')
        ]);
      Auth::login($credentials);
      $id = Auth::user();
      dd($id);
    }*/
    public function authenticate()
    {
      $username = request('username');
      $password = request('password');
      $member = Auth::attempt(['username' => $username, 'password' => $password]);
      dd($member);

    }
}
