<head>
  {!! Charts::assets() !!}
</head>
@extends('layouts.master')
@section('title', 'Manajemen Kas - myKopsis')
@section('heading', 'Manajemen Kas Koperasi')
@section('content')
@include('layouts.alert')
<center>{!! $chart->render() !!}</center><br>
<table class="table">
  <tr>
    <th>ID Kas</th>
    <th>Total Kas</th>
    <th>Detail</th>
    <th>Tanggal</th>
    <th>Action</th>
  </tr>
  @foreach ($cashes as $cash)
  <?php $number = number_format($cash->total_cash);?>
  <tr>
    <td> {{ $cash->id }} </td>
    <td> {{ $number }} </td>
    <td> {{ $cash->details }}</td>
    <td> {{ $cash->created_at }}</td>
    <td>
      <a href="/admin/keuangan/kas/{{ $cash->id }}/edit">
        <button type="button" class="small btn btn-primary"><span class="small glyphicon glyphicon-edit"></span></button>
      </a>
      <a href="/admin/keuangan/kas/{{ $cash->id }}/confirmation">
        <button type="button" class="small btn btn-danger"><span class="small glyphicon glyphicon-trash"></span></button>
      </a>
    </td>
  </tr>
  @endforeach
  <tr class="table-footer">
    <td colspan="9"  class="add-line" type="button" data-toggle="modal" data-target="#addline"><center><b><span class="glyphicon glyphicon-plus plus-background"></span> Tambah Data Baru</b></center></td>
  </tr>
</table>

@include('admin.kas.action.add')
@endsection
