<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class akunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('akun.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        /*$member = new Member;
        $member->fullname = request('fullname');
        $member->username = request('username');
        $member->gender = request('gender');
        $member->birthdate = request('birthdate');
        $member->birthmonth = request('birthmonth');
        $member->birthyear = request('birthyear');
        $member->email = request('email');
        $member->phone = request('phone');
        $member->password = Hash::make(request('password'));
        $member->save();
        $member->member_id = $member->id;
        $member->save();*/

        auth()->login($member);

        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (auth()->id() == $id) {
          $members = Member::find(['id' => $id]);
          return view('akun.show', ['members' => $members]);
        }
        elseif (auth()->id() != $id) {
          return redirect('/home')->with('alert-failed-account', 'Maaf, anda tidak boleh mengintip akun orang lain.');
        }
        else {
          return redirect('/home')->with('alert-failed', 'Maaf, terjadi kesalahan.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->id() == $id) {
          $member = Member::find($id);
          return view('akun.edit')->with('member', $member);
        }
        elseif (auth()->id() != $id) {
          return redirect('/home')->with('alert-failed-edit', 'Maaf, anda tidak boleh mengedit data orang lain.');
        }
        else {
          return redirect('/home')->with('alert-failed', 'Maaf, terjadi kesalahan.');
        }
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
      $this->validate(request(), [
        'fullname' => 'required',
        'username' => 'required|min:4',
        'gender' => 'required',
        'birthdate' => 'required',
        'birthmonth' => 'required',
        'birthyear' => 'required',
        'email' => 'required|email',
        'phone' => 'required|min:6|numeric'
      ]);
      $member = Member::findOrFail($id);
      $member->fullname = request('fullname');
      $member->username = request('username');
      $member->gender = request('gender');
      $member->birthdate = request('birthdate');
      $member->birthmonth = request('birthmonth');
      $member->birthyear = request('birthyear');
      $member->email = request('email');
      $member->phone = request('phone');
      $member->save();
      return redirect('/home')->with('alert-success-update', 'Telah memperbaharui informasi akun anda.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyConfirmation($id)
    {
      return view('akun.confirmation');
    }
    public function destroy($id)
    {
        $member= Member::find($id);
        $member->delete();
        return redirect('/home')->with('alert-success-delete', 'Akun telah berhasil dihapus');
    }
}
