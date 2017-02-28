<head>
  {!! Charts::assets() !!}
</head>
@extends('layouts.master')
@section('title', 'Manajemen Pemasukan & Pengeluaran - myKopsis')
@section('heading', 'Manajemen Pemasukan & Pengeluaran Koperasi')
@section('content')
@include('layouts.alert')
<center>{!! $chartIncome->render() !!}</center><br>
<table class="table">
  <center><h2><b>Pemasukan Koperasi</b></h2></center>
  <tr>
    <th>ID Pemasukan</th>
    <th>Total Pemasukan</th>
    <th>Detail</th>
    <th>TTD Admin</th>
    <th>Tanggal</th>
    <th>Action</th>
  </tr>
  @foreach ($incomes as $income)
  <?php $number = number_format($income->total_income);?>
  <tr>
    <td> {{ $income->income_id }} </td>
    <td> {{ $number }} </td>
    <td> {{ $income->details }}</td>
    <td> {{ $income->admin_id }}</td>
    <td> {{ $income->created_at }}</td>
    <td>
      <a href="/admin/keuangan/pemasukan/{{ $income->income_id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/keuangan/pemasukan/{{ $income->income_id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach
  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addlineincome"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Data Baru</b></center></td>
  </tr>
</table>
<center>{!! $chartOutcome->render() !!}</center><br>
<table class="table">
  <center><h2><b>Pengeluaran Koperasi</b></h2></center>
  <tr>
    <th>ID Pengeluaran</th>
    <th>Total Pengeluaran</th>
    <th>Detail</th>
    <th>TTD Admin</th>
    <th>Tanggal</th>
    <th>Action</th>
  </tr>
  @foreach ($outcomes as $outcome)
  <?php $number = number_format($outcome->total_outcome);?>
  <tr>
    <td> {{ $outcome->outcome_id }} </td>
    <td> {{ $number }} </td>
    <td> {{ $outcome->details }}</td>
    <td> {{ $outcome->admin_id }}</td>
    <td> {{ $outcome->created_at }}</td>
    <td>
      <a href="/admin/keuangan/pengeluaran/{{ $outcome->outcome_id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/keuangan/pengeluaran/{{ $outcome->outcome_id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach
  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addlineoutcome"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Data Baru</b></center></td>
  </tr>
</table>
@include('admin.inout.income.add')
@include('admin.inout.outcome.add')
@endsection
