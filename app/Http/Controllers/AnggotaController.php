<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.anggota')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $validator = $this->validate(request(), [
        'fullname' => 'required',
        'username' => 'required|min:4|unique:members,username',
        'gender' => 'required',
        'birthdate' => 'required',
        'birthmonth' => 'required',
        'birthyear' => 'required',
        'email' => 'required|email|unique:members',
        'phone' => 'required|min:6|numeric',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6',
        'level' => 'required|nullable'
      ]);
        $member = Member::create([
            'fullname' => request('fullname'),
            'username' => request('username'),
            'gender' => request('gender'),
            'birthdate' => request('birthdate'),
            'birthmonth' => request('birthmonth'),
            'birthyear' => request('birthyear'),
            'email' => request('email'),
            'phone' => request('phone'),
            'password' => bcrypt(request('password')),
        ]);
        $member->member_id = $member->id;
        $member->level = request('level');
        $member->save();
        return redirect('/admin/anggota')->with('alert-admin-success-add', 'Berhasil Memasukkan data');
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
        $member = Member::find($id);
        return view('admin.anggota.edit', ['member' => $member]);
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
        'phone' => 'required|min:6|numeric',
        'level' => 'required|nullable'
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
      $member->phone = request('level');
      $member->save();
      return redirect('/admin/anggota')->with('alert-admin-success-update', 'Informasi telah berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroyConfirmation($id)
     {
       return view('admin.anggota.confirmation', ['id' => $id]);
     }
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('admin/anggota')->with('alert-admin-success-delete', 'Akun telah berhasil dihapus');
    }
}
