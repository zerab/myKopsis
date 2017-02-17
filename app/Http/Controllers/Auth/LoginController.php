<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\MessageBag;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    /*public function authenticate()
    {
      $username = request('username');
      $password = request('password');
      if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // Authentication passed...
            echo "login berhasil";
      }
      else {
            echo "login gagal";
      }
    }*/
    public function authenticate()
    {
      $username = request('username');
      $password = request('password');
      if ($member = Auth::attempt(['username' => $username, 'password' => $password]))
      {
         return redirect('/home')->with('alert-success', 'Telah berhasil login.');
      }
      else
      {
        $errors = new MessageBag(['password' => ['Username dan/atau password anda salah.']]);
        return redirect('/login')->withErrors($errors)->with('password');
      }
    }
    public function logout()
    {
      Auth::logout();
      return redirect('/');
    }
}
