<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
html{
  overflow-x: hidden;
  
}
  .geser{
    margin-left:  100px;
  }
  .geser1{
    margin-left:  70px;
  }
  .geser2{
      margin-left: 0px;
  }
</style>

    <title>Fasilitas Hotel Grand Vacation Hotel</title>
  </head>
  <body>

  <br> 

 <div class="row row-cols-1 row-cols-md-3 g-4">
  
  @foreach($fashotel as $i =>$fashotell)
  <div class="col col-sm-2 py-4">
  <div class="card geser1" style="width: 503px; height:400px; margin-left: 45px;">
      <img src="{{url('/Gambar/').'/'.$fashotell->image}}" class="card-img-top" alt="..." style="width:500px; height:300px">
      <div class="card-body">
        <h5 class="card-title text-center">{{$fashotell->nama}}</h5>
        <br>
        <p class="card-text">{{$fashotell->keterangan}}</p>
      </div>
    </div>
  </div>
  @endforeach --}}
  <!-- <div class="col">
  <div class="card geser1" style="width: 350px;">
      <img src="{{url('/Gambar/parkirmobil.jpg')}}" class="card-img-top" alt="..." style="width:auto; height:200px">
      <div class="card-body">
        <h5 class="card-title text-center">Parkiran</h5>
        <br>
        <p class="card-text">Tersedia Fasilitas kolam Renang dengan Panjang 34 meter persegi dan tersedia tempat bersantai untuk berjemur biar glowing hahah.</p>
      </div>
    </div>
  </div>
  <div class="col">
  <div class="card" style="width: 350px;">
      <img src="{{url('/Gambar/taman.jpg')}}" class="card-img-top" alt="..." style="width:auto; height:200px">
      <div class="card-body">
        <h5 class="card-title text-center">Taman Kanak - kanak</h5>
        <br>
        <p class="card-text">Dengan suasana yang sejuk dan segar sehingga nyaman untuk melakukan aktifitas</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card geser" style="width: 350px;">
      <img src="{{url('/Gambar/f.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">GYM</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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