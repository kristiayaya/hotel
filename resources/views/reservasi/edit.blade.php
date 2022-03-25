@extends('reservasi.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Reservasi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservasi.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('reservasi.update',$reservasi->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Cek In:</strong>
                    <input type="date" name="tgl_cekin" value="{{ $reservasi->tgl_cekin }}" class="form-control" placeholder="Tanggal Cek In">
                </div>
                </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Cek Out:</strong>
                    <input type="date" name="tgl_cekout" value="{{ $reservasi->tgl_cekout }}" class="form-control" placeholder="Tanggal Cek Out">
                </div>
                </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar:</strong>
                    <input type="number" name="jml_kamar" value="{{ $reservasi->jml_kamar }}" class="form-control" placeholder="Jumlah Kamar">
                </div>
                </div>    

                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $reservasi->email }}" class="form-control" placeholder="Email">
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Handphone:</strong>
                    <input type="number" name="no_hp" value="{{ $reservasi->no_hp }}" class="form-control" placeholder="No Handphone">
                </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pemesanan:</strong>
                    <input type="text" name="nama_pemesanan" value="{{ $reservasi->nama_pemesanan }}" class="form-control" placeholder="Nama Pemesanan">
                </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Tamu:</strong>
                    <input type="text" name="nama_tamu" value="{{ $reservasi->nama_tamu }}" class="form-control" placeholder="Nama Tamu">
                </div>
                </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <input type="text" name="tipe_kamar" value="{{ $reservasi->tipe_kamar }}" class="form-control" placeholder="Tipe Kamar">
                </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
@endsection