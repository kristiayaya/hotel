<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>HOME GRAND VACATION HOTEL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>home</title>
    <link rel="stylesheet" href="{{asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{asset('css/carousel2.css') }}">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <script src="{{asset('js/app.js') }}"></script>

    <!-- Bootstrap core CSS -->

    <style>
    .rata{
      text-align: justify;
       text-justify: inter-word;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      input[type=number1]::-webkit-inner-spin-button, 
input[type=number1]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
    </style>

    
  </head>
  <body > 
    
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:rgb(38,36,36) ">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
         <li class="nav-item">
            <img src="{{asset('Gambar/kristiaoke.png')}}" width="50px", height="40px"/>
            </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" aria-current="page" href="{{  route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="{{ route('tamu.kamar') }}">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white">Fasilitas</a>
          </li>
         <li class="nav-item d-none d-sm-inline-block"></li>
        
        @if (Route::has('login'))
                
                    @auth
                      <li class="nav-item">
                        <a class="nav-link active text-white" href="{{ url('/home') }}">Home</a>
                      </li>
                    @else
                      <li class="nav-item">
                        <a class="nav-link active text-white" href="{{ route('login') }}">Login</a>
                      </li>

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                
            @endif
            
        
        </ul>
      </div>
    </div>
  </nav>
</header>

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
 
    </div>
    <div class="col">
  
    </div>
  </div>
</div>
</div>
<div class="container" style="margin-bottom:40px">
        <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row g-3 align-items-center" style="margin-left:65px">
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
    <input type="number" min=0 name="jml_kamar" class="form-control" aria-describedby="passwordHelpInline">
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
    <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
    <input type="text" name="tipe_kamar" class="form-control w-55" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn" style="background-color :	Navy; color: white">Konfirmasi Pemesanan</button>
  
</form>
</div>

        </div>
      </div>
  </div>
<div class="container p-6" >
<p class="text-center fw-bold fs-2 mt-5 mb-5">ROOM</p>


<div class="container">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="{{url('/Gambar/oke.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">DELUXE ROOM Room with an area of ​​​​24 square meters. The room is equipped with a sofa .</p>
  </div>
</div>
    </div>
    <div class="col" >
    <div class="card" style="width: 18rem;">
  <img src="{{url('/Gambar/kamar.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">
    DELUXE PREMIUM This 26 sqm room is furnished with a modern and attractive design.</p>
  </div>
  
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="{{url('/Gambar/gambar 3.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">
    JUNIOR SUITES
36 sqm room, equipped with a set of table and chairs in the room.</p>
  </div>
    </div>
  </div>
</div>



  


</div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

      
  </body>
</html>
