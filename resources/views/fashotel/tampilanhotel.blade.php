@extends(' layouts.app-tamu')

@section('content')
{{-- 
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:3%">

   @foreach($fashotel as $i =>$fashotell)
   <div class="col col-sm-2 py-4">
   <div class="card geser1" style="width: 503px; height:400px; margin-left: -5px;">
       <img style="width: 440px;height: 440px;" src="{{url('/Gambar/').'/'.$fashotell->image}}" class="card-img-top" alt="..." style="width:500px; height:300px">
       <div class="card-body">
         <h5 class="card-title text-center">{{$fashotell->nama}}</h5>
         <br>
         <p class="card-text">{{$fashotell->keterangan}}</p>
       </div>
     </div>
   </div>
   @endforeach     
 </div>

   --}}
   <div class="display-2 text-center" style="margin-top :6%;">Fasilitas Hotel</div>
    <div class="album py-5" style="background-color:#A#ADD8E6;">
      <div style="    max-width: 90%;" class="container mt-5">
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @foreach($fashotel as $i =>$fashotell)

            <div class="col" style="width: 430px; margin-left : 55px">
            <div class="card shadow-sm">
              <img src="{{url('/Gambar/').'/'.$fashotell->image}}"  class="bd-placeholder-img card-img-top mb-2" width="100%" height="225"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
  
              <div class="card-body text-center">
                  <h5 class="card-title text-center mb-2">{{$fashotell->nama}}</h5>
                <p class="card-text mt-3" >{{$fashotell->keterangan}}</p>
                <div class="d-flex justify-content-between align-items-center">
                 
                </div>
              </div>
            </div>
          </div>

          @endforeach     

  </main>
  
@endsection

