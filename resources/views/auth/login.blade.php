<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-login.css">
    <title>Grand Vacation Hotel</title>

    <style>
    #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
  </head>
  <body>
   
	<section class="ftco-section">
            <div class="container" style="margin-top : -70px">
                <div class="row justify-content-center">
            
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                  
                        <div class="wrap d-md-flex">
                            <div class="p-4 p-lg-5 text-center text-light d-flex align-items-center order-md-last" style="width: 50%; background-color : #302f2f">
                                <div class="text w-100">
                                    <p style="font-size : 30px; font-weight: 900">
                                        <span style="margin-bottom : -25px">Selamat Datang di</span>
                                        <span>Grand Vacation Hotel</span>
                                </p>
                                
                                <p style="font-size : 14px;">
                                        Untuk tetap terhubung dengan kami silahkan masuk dengan akun anda 
                                </p>
                            
                                    <button class="btn btn-white btn-outline-white data-toggle" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Login
                                        </button>
                                    <div class="collapse text-left" id="collapseExample">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                    <form action="#" class="signin-form">
                                                    <div class="form-group mb-3"  style="margin-top : 45px">
                                                        <label  style="margin-left:15px;" class="label text-white" for="name">{{ __('E-Mail') }}</label>
                                                        <input name="email" id="email" type="email " class="form-control @error('email') is-invalid @enderror" style="background-color :#fffafa;" placeholder="Email" required>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <div class="col">
    
                                                            <label class="label text-white" for="name">{{ __('Password') }}</label>
                                                            <input id="password" name="password" type="password" class="form-control  @error('password') is-invalid @enderror"style=" margin-left: -15px; width: 365px; background-color :#fffafa;" placeholder="Password" required>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="form-control btn submit px-3" style="    color: #302f2f;
                                                        background-color: #fffafa;">Login</button>
                                                    </div>
                                                </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="login-wrap p-4 p-lg-5">
                          <div class="d-flex">
                              <div class="w-100">
                                  <h3 class="mb-4">Register</h3>
                                  
                              </div>
                                
                          </div>

                   



                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                              <div class="form-group mb-3">
                                  <label class="label" for="name">Name</label>
                                  <input name="name" id="name" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Username" required>
                                  @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                </div>

                              <div class="form-group mb-3">
                                  <label class="label" for="name">Email</label>
                                  <input name="email" id="email" value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                </div>

                              <div class="form-group mb-3">
                                  <label class="label" for="name">Password</label>
                                  <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                </div>

                        <div class="form-group mb-3">
                            <label class="label" for="password">Confirm Password</label>
                          <input name="password_confirmation" id="Confirm Password" type="password" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn submit px-3" style="color : white; background-color : #302f2f;">Register</button>
                        </div>
                       
                      </form>
                      @if (session('success'))
            
            
                      <div class="row">
                          <div class="card-body">
                              <div class="alert alert-success" role="alert" style="margin-bottom: -314px;margin-top: -41px;background-color: transparent;margin-left: -12px; border : 0px" >
                                    Data Berhasil di Input
                                    <a class="bi bi-printer-fill bi-2x" style="color: #155724; " href="/tamu/check"></a>
                                    {{-- <a class="btn btn-lg" href="/login" role="button" style="color: #f7f7f7; background-color : #747778">cetak</a> --}}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    </div>
                  </div>
                    </div>
                </div>
            </div>
          
            {{-- <div class="row">
                <div class="card-body">
                    <div class="alert alert-success" role="alert" style="margin-left: 15px;width: 690px;">
                        Data Berhasil di Input
                        <a class="bi bi-printer-fill bi-2x" style="color: #155724; " href="/tamu/check"></a>
                        {{-- <a class="btn btn-lg" href="/login" role="button" style="color: #f7f7f7; background-color : #747778">cetak</a> --}}
                    {{-- </div>
                </div>
            </div> --}}
{{-- </div> --}}

        </section>

    
        <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>

