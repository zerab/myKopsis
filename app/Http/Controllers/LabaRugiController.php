<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profit;
use App\Loss;
use Charts;

class LabaRugiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $profits = Profit::all();
      $losses = Loss::all();
      $chartProfit = Charts::database(Profit::all(), 'area', 'highcharts')
              ->title('Keuntungan Bulan ini')
              ->elementLabel("Keuntungan")
              ->colors(['#26A65B'])
              ->dimensions(1000, 500)
              ->labels($profits->pluck('created_at'))
              ->values($profits->pluck('total_profit'))
              ->responsive(true);
      $chartLoss = Charts::database(Loss::all(), 'area', 'highcharts')
              ->title('Kerugian Bulan ini')
              ->elementLabel("Kerugian")
              ->colors(['#CF000F'])
              ->dimensions(1000, 500)
              ->labels($losses->pluck('created_at'))
              ->values($losses->pluck('total_loss'))
              ->responsive(true);
        return view('admin.labarugi.index', ['profits' => $profits, 'losses' => $losses, 'chartProfit' => $chartProfit, 'chartLoss' => $chartLoss]);
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
