@extends('layouts.app-tamu')

@section('content')

<div class="container" style="margin-top:5%;">

    <div class="container">
        <div class="row">
          <div class="col-1">
            
          </div>
          <div class="col">

            <div class="d-flexs">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card" style="width: 35rem; margin-left:-50px;">
                          <img src="{{url('/Gambar/kamarnya.jpg')}}"class="card-img-top" alt="..." style="width:558px; height:300px">
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
                        <div class="card geser1" style="width: 35rem; margin-left:200px;">
                            <img src="{{url('/Gambar/kamarku.jpg')}}" class="card-img-top" alt="..." style="width:558px; height:300px" >
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

            </div>
              
          </div>
          <div class="col-1">
            
          </div>
        </div>
      </div>

  
    </div>
      @endsection