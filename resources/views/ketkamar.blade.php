<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  .geser{
    margin-left:  250px;
  }
  .geser1{
    margin-left:  240px;
  }
</style>
    <title>Kamar</title>
  </head>
  <body>
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

    <br>
  <br>
  <br>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
     <div class="card geser" style="width: 25rem;">
      <img src="{{url('/Gambar/kamarnya.jpg')}}"class="card-img-top" alt="..." style="width:399px; height:300px">
      <div class="card-body">
        <h5 class="card-title"><center>Superior Room</center></h5>
        <br>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
  <a href="{{ route('fassuperior') }}" class="btn btn-outline-primary">Preview</a>
  </div>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card geser1" style="width: 25rem;">
      <img src="{{url('/Gambar/kamarku.jpg')}}" class="card-img-top" alt="..." style="width:399px; height:300px" >
      <div class="card-body">
        <h5 class="card-title"><center>Deluxe Room</center></h5>
        <br>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
  <a href="{{ route('fasdeluxe') }}" class="btn btn-outline-primary">Preview</a>
  </div>
  </div>
     
    </div>
  </div>
  
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>