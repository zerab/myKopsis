<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Member;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'fullname' => 'required',
          'username' => 'required|min:4|unique:members,username',
          'gender' => 'required',
          'birthdate' => 'required',
          'birthmonth' => 'required',
          'birthyear' => 'required',
          'email' => 'required',
          'phone' => 'required|min:6|numeric',
          'password' => 'required|min:6',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create()
    {
        $member = Member::create([
            'fullname' => request('fullname'),
            'username' => request('username'),
            'gender' => request('gender'),
            'birthdate' => request('birthdate'),
            'birthmonth' => request('birthmonth'),
            'birthyear' => request('birthyear'),
            'email' => request('email'),
            'phone' => request('phone'),
            'password' => bcrypt(request('password'))
        ]);
        return redirect('/');
    }
}
