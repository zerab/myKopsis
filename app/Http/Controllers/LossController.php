<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loss;

class LossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $validator = $this->validate(request(), [
        'total_loss' => 'required|numeric',
        'details' => 'required'
      ]);
      $id = auth()->id();
        $loss = Loss::create([
          'total_loss' => request('total_loss'),
          'details' => request('details'),
          'admin_id' => $id
        ]);
        return redirect('/admin/keuangan/laba-rugi')->with('alert-admin-success-add', 'Berhasil Memasukkan data');
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
      $loss = Loss::find($id);
      return view('admin.labarugi.loss.edit', ['loss' => $loss]);
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
        'total_loss' => 'required|numeric',
        'details' => 'required'
      ]);
        $admin_id = auth()->id();
        $loss = Loss::find($id);
        $loss->total_loss = request('total_loss');
        $loss->details = request('details');
        $loss->admin_id = $admin_id;
        $loss->save();
        return redirect('/admin/keuangan/laba-rugi')->with('alert-admin-success-update', 'Berhasil memperbaharui data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroyConfirmation($id)
     {
       return view('admin.labarugi.loss.confirmation', ['id' => $id]);
     }

    public function destroy($id)
    {
      $loss = Loss::find($id);
      $loss->delete();
      return redirect('admin/keuangan/laba-rugi')->with('alert-admin-success-delete', 'Data telah berhasil dihapus');
    }
}
