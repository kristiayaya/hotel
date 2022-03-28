@extends('faskamar.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Fasilitas Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faskamar.index') }}"> Kembali</a>
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
  
    <form action="{{ route('faskamar.update',$faskamar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <input type="text" name="tipe_kamar" value="{{ $faskamar->tipe_kamar }}" class="form-control" placeholder="Tipe Kamar">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Fasilitas:</strong>
                    <input type="text" name="nama" value="{{ $faskamar->nama }}" class="form-control" placeholder="Nama Fasilitas">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="image" value="{{ $faskamar->image }}" class="form-control" placeholder="Gambar">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
@endsection