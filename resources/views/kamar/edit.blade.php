@extends('kamar.layout')
   
@section('content')

  <div class="container mt-5" style="margin-left: 160px; margin-top:20px;" >

  <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamar.index') }}"> Kembali</a>
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

<div class="card text-dark bg-light mb-3" style="width: 1050px; height:400px; margin-top:50px; margin-left:350px; background-color :	#B0E0E6 ">
 
  <div class="card-body bg-light mb-3">

    <div class="row">
        <div class="col-lg-12 margin-tb ">
            <div class="pull-left " style="margin-top:40px; margin-left:440px;">
                <h2>Edit Data Kamar</h2>
            </div>
            
   
  
  
    <div class="container mt-5" style="margin-top: 60px;">

<form action="{{ route('kamar.update',$kamar->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:20px;">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <input type="text" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}" class="form-control" placeholder="Tipe Kamar">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar:</strong>
                    <input type="number" name="jml_kamar" value="{{ $kamar->nama }}" class="form-control" placeholder="Jumlah Kamar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top:40px;" >
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>

  </div>
</div>


    
   
@endsection