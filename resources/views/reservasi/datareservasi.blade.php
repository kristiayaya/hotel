@extends('layouts.app-tamu')

@section('content')
<div class="container" style="width:90%; max-width: 95%;">

@if (session('success'))
<div class="alert alert-success" role="alert" style="margin-top : 10%; margin-bottom : -80px">
 Pemesanan Berhasil
</div>
@endif
    <table class="table table-bordered" style=" margin-top:7%; border: inset;">
      <tr>
        <thead class="text-white" style="background-color:#FA8072; border-style : none;">
          <th>No</th>
          <th>Tanggal Check In</th>
          <th>Tanggal Check Out</th>
          <th>Jumlah Kamar</th>
          <th>Email</th>
          <th>No Handphone</th>
          <th>Nama Pemesan</th>
          <th>Nama Tamu</th>
          <th>Tipe Kamar</th>
          <th>Aksi </th>
        </thead>
      </tr>
      @foreach ($data as $i => $dataa)
      <tr class="table-light">
        <td>{{ ++$i }}</td>
        <td>{{ $dataa->tgl_cekin }}</td>
        <td>{{ $dataa->tgl_cekout }}</td>
        <td>{{ $dataa->jml_kamar }}</td>
        <td>{{ $dataa->email }}</td>
        <td>{{ $dataa->no_hp }}</td>
        <td>{{ $dataa->nama_pemesan }}</td>
        <td>{{ $dataa->nama_tamu }}</td>
        <td>{{ $dataa->tipe_kamar }}</td>
        <td>
          <form action="{{ route('cetak', $dataa->id) }}" method="POST" target="_blank">
              @csrf
              
              <button type="submit" class="btn btn-danger">Cetak</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
@endsection