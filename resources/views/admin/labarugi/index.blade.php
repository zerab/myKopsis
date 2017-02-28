<head>
  {!! Charts::assets() !!}
</head>
@extends('layouts.master')
@section('title', 'Manajemen Laba & Rugi - myKopsis')
@section('heading', 'Manajemen Laba & Rugi Koperasi')
@section('content')
@include('layouts.alert')
<center>{!! $chartProfit->render() !!}</center><br>
<table class="table">
  <center><h2><b>Laba Koperasi</b></h2></center>
  <tr>
    <th>ID Laba</th>
    <th>Total Laba</th>
    <th>Detail</th>
    <th>TTD Admin</th>
    <th>Tanggal</th>
    <th>Action</th>
  </tr>
  @foreach ($profits as $profit)
  <?php $number = number_format($profit->total_profit);?>
  <tr>
    <td> {{ $profit->profit_id }} </td>
    <td> {{ $number }} </td>
    <td> {{ $profit->details }}</td>
    <td> {{ $profit->admin_id }}</td>
    <td> {{ $profit->created_at }}</td>
    <td>
      <a href="/admin/keuangan/laba/{{ $profit->profit_id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/keuangan/laba/{{ $profit->profit_id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach
  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addlineprofit"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Data Baru</b></center></td>
  </tr>
</table>
<center>{!! $chartLoss->render() !!}</center><br>
<table class="table">
  <center><h2><b>Rugi Koperasi</b></h2></center>
  <tr>
    <th>ID Rugi</th>
    <th>Total Rugi</th>
    <th>Detail</th>
    <th>TTD Admin</th>
    <th>Tanggal</th>
    <th>Action</th>
  </tr>
  @foreach ($losses as $loss)
  <?php $number = number_format($loss->total_loss);?>
  <tr>
    <td> {{ $loss->loss_id }} </td>
    <td> {{ $number }} </td>
    <td> {{ $loss->details }}</td>
    <td> {{ $loss->admin_id }}</td>
    <td> {{ $loss->created_at }}</td>
    <td>
      <a href="/admin/keuangan/rugi/{{ $loss->loss_id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/keuangan/rugi/{{ $loss->loss_id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach
  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addlineloss"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Data Baru</b></center></td>
  </tr>
</table>
@include('admin.labarugi.profit.add')
@include('admin.labarugi.loss.add')
@endsection
