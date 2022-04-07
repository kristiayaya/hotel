@extends('layouts.app-tamu')

@section('content')
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{url('/Gambar/coba.jpg')}}" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        
        <div class="container">
            
        </div>
   </div>
    <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{url('/Gambar/ruang.jpg')}}" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{url('/Gambar/siap.jpg')}}" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="p-5">
<p class="text-center fw-bold fs-2">Grand Vacation Hotel</p>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <div class="card" style="width: 70rem;">
  <div class="card-body">
    <p class="card-text rata justify-text-center">Welcome to Grand Vacation Hotel. A hotel with a comfortable atmosphere and suitable for holidays. enjoy time with family, relatives, friends and certain occasions. There are various facilities, both room facilities and general hotel facilities that complement comfort and satisfaction. Let's enjoy your comfortable rest with Grand Vacation Hotel.</p>
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
 
    </div>
    <div class="col">
  
    </div>
  </div>
</div>
</div>
<div class="container" style="margin-bottom:40px">
        <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row g-3 align-items-center" style="margin-left:150px">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Check In</label>
  </div>
  <div class="col-auto">
    <input type="date" name="tgl_cekin" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Check Out</label>
  </div>
  <div class="col-auto">
    <input type="date" name="tgl_cekout" class="form-control" aria-describedby="passwordHelpInline">
  </div>
   <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Jumlah</label>
  </div>
  <div class="col-auto">
    <input type="number" min=1 name="jml_kamar" class="form-control" aria-describedby="passwordHelpInline">
  </div>

  <div class="col-auto">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Pesan
  </a>
  </div>
</div>

  <div class="collapse" id="collapseExample">
      <div class="row g-3 align-items-center">
        <div class="col-3">
        <div class="card p-5" style="width: 35rem; height: 35rem; margin-left : 300px; margin-top : 80px"  >
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
    <input type="text" name="nama_pemesan" class="form-control w-55" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control w-55" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="appearance: none;">No Handphone</label>
    <input type="number1" name="no_hp" class="form-control w-55" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
    <input type="text" name="nama_tamu" class="form-control w-55" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label" style="appearance: none;">Tipe Kamar</label>

      <select name="tipe_kamar" id="tipe_kamar" class="form-control">
          <option selected class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Pilih salah satu tipe kamar</option>
          
          @if($super >= 0)
          <option value="Superior">Superior</option>
          @else
          <option class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Superior</option>
          <!-- <option value="Superior" class="disabled text-muted">Superior</option> -->
          @endif
          
          @if($delux >= 0)
          <option value="Deluxe">Deluxe</option>
          @else
          <option class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Deluxe</option>
          <!-- <option value="Superior" class="disabled text-muted">Superior</option> -->
          @endif
        </select>
  </div>
   
  <button type="submit" class="btn btn-primary" style=" color: white">Konfirmasi Pemesanan</button>
  
</form>
</div>

        </div>
      </div>
  </div>

@endsection