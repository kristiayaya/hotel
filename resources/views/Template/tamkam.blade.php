@extends(' layouts.app-tamu')

@section('content')
@foreach($faskamar as $i =>$faskamarr)
<div class="card mb-3" style="max-width: 540px;">
<div class="row g-0">
  <div class="col-md-4">
    <img src="{{url('/Gambar/').'/'.$faskamarr->image}}" class="img-fluid rounded-start" alt="..." style="width:400px; height:150px">
  </div>
  <div class="col-md-8">
    <div class="card-body">
      <p class="card-text">{{$faskamarr->nama}}</p>
      <p class="card-text">{{$faskamarr->tipe_kamar}}</p>
    </div>
  </div>
</div>
</div>
@endforeach
@endsection