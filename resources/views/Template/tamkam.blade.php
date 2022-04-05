@extends(' layouts.app-tamu')

@section('content')


<div class="container" style="margin-top: 5%">
  <div class="col">
  
  <div class="display-2 text-center" style="margin-bottom : 7%;">Fasilitas Kamar {{ $title }}</div>
  <div class=""><a href="/kamartamu" type="button"class="btn btn-danger" style="margin-left : 10px; margin-top : 2px">kembali</a></div>
  
  </div>
<main>
  <div class="album py-5 bg-light" style="margin-top:20px;">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($faskamar as $i =>$faskamarr)
     
        {{-- <div class="col" style="width :300px"> --}}
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="{{ asset("Gambar/$faskamarr->image")}}" width="100%" height="225"></img>

            <div class="card-body">
              <p class="card-title text-center" style="font-size : 20px; font-weight : 600;">{{$faskamarr->nama}}</p>
              {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
              <div class="d-flex justify-content-between align-items-center">
               
              </div>
            </div>
          </div>
        </div>

      @endforeach
      </div>
    </div>
  </div>

</main>


{{-- 

    <div class="row row-cols-3 row-cols-lg-3 g-2 g-lg-3">

        @foreach($faskamar as $i =>$faskamarr) --}}

{{-- <a href="">{{ $faskamarr->image }}</a>
<div class="card" style="width: 18rem; margin-right : 1%; padding : 0px;">
  <img src="{{ asset("Gambar/$faskamarr->image")}}" class="img-fluid" alt="..." >
  <div class="card-body">
    <p class="" style="font-size : 24px; font-weight : 600; margin-bottom : -5px">Kapal Udara</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> --}}
{{-- 
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-1">
    <div class="col-md-4">
      <img src="{{ asset("Gambar/$faskamarr->image")}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div> --}}
        {{-- <div class="card" style="width:350px; height:auto; margin-right : 1%">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('Gambar/heli.jpg')}}" class="img-thumbnail" alt="" style="height : 100%; width : 300px; padding : 0">
                </div>
                <div class="col">
                    <h3 class="card-title">Title</h3>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div> --}}
        {{-- @endforeach --}}
    </div>
    </div>
    @endsection
