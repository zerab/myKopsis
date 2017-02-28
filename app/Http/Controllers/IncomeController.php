<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;

class IncomeController extends Controller
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
        'total_income' => 'required|numeric',
        'details' => 'required'
      ]);
      $id = auth()->id();
        $income = Income::create([
          'total_income' => request('total_income'),
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
      $income = Income::find($id);
      return view('admin.inout.income.edit', ['income' => $income]);
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
        'total_income' => 'required|numeric',
        'details' => 'required'
      ]);
        $admin_id = auth()->id();
        $income = Income::find($id);
        $income->total_income = request('total_income');
        $income->details = request('details');
        $income->admin_id = $admin_id;
        $income->save();
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
       return view('admin.inout.income.confirmation', ['id' => $id]);
     }

    public function destroy($id)
    {
      $income = Income::find($id);
      $income->delete();
      return redirect('admin/keuangan/pemasukan-pengeluaran')->with('alert-admin-success-delete', 'Data telah berhasil dihapus');
    }
}
