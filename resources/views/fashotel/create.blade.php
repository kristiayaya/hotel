@extends('fashotel.layout')
  
@section('content')


    <div class="container mt-5" style="margin-left: 50px; margin-top:20px;  " >

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-left:300px;">
            <h2>Tambah Data Fasilitas Hotel </h2>
        </div>
        <div class="pull-right" style="margin-top:60px;">
            <a class="btn btn-primary" href="{{ route('fashotel.index') }}"> Kembali</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


     <div class="container mt-5" style="margin-top: 60px; ">
   
<div class="card text-dark bg-light mb-3" style="max-width: 80rem;">
  
  <div class="card-body">
    
<form action="{{ route('fashotel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="container mt-5" style="margin-left: 10px; ">
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:30px;">
            <div class="form-group">
                <strong>Nama Fasilitas:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama Failitas">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <input type="file" name="image" class="form-control-file" placeholder="Gambar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top:20px; margin-bottom:20px;">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>

  </div>
</div>



@endsection