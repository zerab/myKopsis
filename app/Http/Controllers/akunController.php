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
        if(auth()->id() == $id) {
          $members = Member::find(['id' => $id]);
          return view('akun.show', ['members' => $members]);
        }
        else {
          return redirect('/home')->with('alert-failed-account', 'Maaf, anda tidak boleh mengintip akun orang lain.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
