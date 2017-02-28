<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\Outcome;
use Charts;

class InOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();
        $outcomes = Outcome::all();
        $chartIncome = Charts::database(Income::all(), 'area', 'highcharts')
                ->title('Pemasukan Bulan ini')
                ->elementLabel("Pemasukan")
                ->dimensions(1000, 500)
                ->labels($incomes->pluck('created_at'))
                ->values($incomes->pluck('total_income'))
                ->responsive(true);
        $chartOutcome = Charts::database(Outcome::all(), 'area', 'highcharts')
                ->title('Pengeluaran Bulan ini')
                ->elementLabel("Pengeluaran")
                ->colors(['#FFC107'])
                ->dimensions(1000, 500)
                ->labels($outcomes->pluck('created_at'))
                ->values($outcomes->pluck('total_outcome'))
                ->responsive(true);
        return view('admin.inout.index', ['incomes' => $incomes, 'outcomes' => $outcomes, 'chartIncome' => $chartIncome, 'chartOutcome' => $chartOutcome]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function incomeEdit($id)
    {

    }

    public function outcomeEdit($id)
    {

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
