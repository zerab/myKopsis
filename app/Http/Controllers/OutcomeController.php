<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Outcome;

class OutcomeController extends Controller
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
        'total_outcome' => 'required|numeric',
        'details' => 'required'
      ]);
      $id = auth()->id();
        $outcome = Outcome::create([
          'total_outcome' => request('total_outcome'),
          'details' => request('details'),
          'admin_id' => $id
        ]);
        return redirect('/admin/keuangan/pemasukan-pengeluaran')->with('alert-admin-success-add', 'Berhasil Memasukkan data');
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
      $outcome = Outcome::find($id);
      return view('admin.inout.outcome.edit', ['outcome' => $outcome]);
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
        'total_outcome' => 'required|numeric',
        'details' => 'required'
      ]);
        $admin_id = auth()->id();
        $outcome = Outcome::find($id);
        $outcome->total_outcome = request('total_outcome');
        $outcome->details = request('details');
        $outcome->admin_id = $admin_id;
        $outcome->save();
        return redirect('/admin/keuangan/pemasukan-pengeluaran')->with('alert-admin-success-update', 'Berhasil memperbaharui data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroyConfirmation($id)
     {
       return view('admin.inout.outcome.confirmation', ['id' => $id]);
     }

    public function destroy($id)
    {
      $outcome = Outcome::find($id);
      $outcome->delete();
      return redirect('admin/keuangan/pemasukan-pengeluaran')->with('alert-admin-success-delete', 'Data telah berhasil dihapus');
    }
}
