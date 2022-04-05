<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Grand Vacation Hotel</title>
  </head>
  <body>
    
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:rgb(38,36,36) ">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
              
                <li class="nav-item text-white">
                  <a class="nav-link active text-white" style="font-size : 20px; margin-right: 5px;"  aria-current="page" href="/Beranda">Home</a>
                </li
                <li class="nav-item">
                  <a class="nav-link active text-white" style="font-size : 20px; margin-right: 5px;"  href="{{ route('tamu.kamar') }}">Kamar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" style="font-size : 20px; margin-right: 5px; width: 153px;"  href="{{ route('FasilitasHotel')}} ">Fasilitas Hotel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-white" style="font-size : 20px; margin-right: 5px;"  href="{{ route('datareservasi')}}">Pemesanan</a>
                </li>
               <li class="nav-item d-none d-sm-inline-block"></li>
              
              @if (Route::has('login'))
                      
                          @auth
                            <!-- <li class="nav-item">
                              <a class="nav-link active text-white" href="{{ url('/home') }}">Home</a>
                            </li> -->
                            
                            
                            <li class="nav-item">
                            <a style="margin-left: 1090px;font-size : 20px; margin-right: 5px;" class="nav-link active text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a></li>
      
                      
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
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
      
      

    <div class="">
    
      @yield('content')

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