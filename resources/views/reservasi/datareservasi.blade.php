@extends('layouts.app-tamu')

@section('content')
<div class="container" style="width:90%; max-width: 95%;">

      
    <table class="table table-bordered" style=" margin-top:7%; border: inset;">
      <tr>
        <thead class="text-white" style="background-color:#FA8072; border-style : none;">

          <th>No</th>
          <th>Tanggal Cek In</th>
          <th>Tanggal Cek Out</th>
          <th>Jumlah Kamar</th>
          <th>Email</th>
          <th>No Handphone</th>
          <th>Nama Pemesanan</th>
          <th>Nama Tamu</th>
          <th>Tipe Kamar</th>
          <th>Aksi</th>
        </thead>
      </tr>
      @foreach ($data as $i => $dataa)
      <tr>
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