<?php

namespace App\Http\Controllers;
use App\Cash;
use Charts;

use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cashes = Cash::all();
      $chart = Charts::database(Cash::all(), 'area', 'highcharts')
              ->title('Kas Bulan ini')
              ->elementLabel("Total Kas")
              ->dimensions(1000, 500)
              ->labels($cashes->pluck('created_at'))
              ->values($cashes->pluck('total_cash'))
              ->responsive(true);
        return view('admin.kas.index', ['chart' => $chart, 'cashes' => $cashes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $validator = $this->validate(request(), [
        'total_cash' => 'required|numeric',
        'details' => 'text'
      ]);
        $cash = Cash::create([
          'total_cash' => request('total_cash'),
          'details' => request('details')
        ]);
        return redirect('/admin/keuangan/kas')->with('alert-admin-success-add', 'Berhasil Memasukkan data');
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
      $cash = Cash::find($id);
      return view('admin.kas.action.edit', ['cash' => $cash]);
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
        'total_cash' => 'required|numeric',
        'details' => 'text'
      ]);
        $cash = Cash::find($id);
        $cash->total_cash = request('total_cash');
        $cash->details = request('details');
        $cash->save();
        return redirect('/admin/keuangan/kas')->with('alert-admin-success-update', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroyConfirmation($id)
     {
       return view('admin.kas.action.confirmation', ['id' => $id]);
     }

    public function destroy($id)
    {
      $cash = Cash::find($id);
      $cash->delete();
      return redirect('admin/keuangan/kas')->with('alert-admin-success-delete', 'Data telah berhasil dihapus');
    }
}
