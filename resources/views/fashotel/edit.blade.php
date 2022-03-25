@extends('fashotel.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Fasilitas Hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('fashotel.index') }}"> Kembali</a>
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
  
    <form action="{{ route('fashotel.update',$fashotel->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Fasilitas:</strong>
                    <input type="text" name="nama" value="{{ $fashotel->nama }}" class="form-control" placeholder="Nama Fasilitas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="image" value="{{ $fashotel->image }}" class="form-control" placeholder="Gambar">
                   
                    <img src= "{{ asset("Gambar/$fashotel->image") }}" style="width:100;height:100px"/>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan">{{ $fashotel->keterangan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
@endsection