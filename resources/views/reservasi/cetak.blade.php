<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
    <style>
        html{
          -webkit-print-color-adjust: exact;
        }
    .geser{margin-left:200px;
    }
    .geser1{
      margin-left:5px;
    }
    .geser2{
      margin-left:39px;
    }
    .geser3{
      margin-left:44px;
    }
    .geser4{
      margin-left:86px;
    }
    .geser5{
      margin-left:14px;
    }
    </style>
    <title>Cetak</title>
  </head>
  <body>
  <div class="card geser border-danger mb-3" style="max-width: 63rem; top:50px; margin-left:20px; padding-bottom:0px; ">
  <div class="card-header bg-danger text-white"  style="height:100px; font-weight: bold; font-size:50px; " ><center>Bukti Data Reservasi</center></div>
  <div class="card-body border-danger">
  <div class="row g-3 align-items-center" style="margin-left:65px">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Tanggal Check In</label>
  </div>
  <div class="col-auto">
    <input type="date" name="tgl_cekin" class="form-control" value="{{ $print[0]->tgl_cekin }}" aria-describedby="passwordHelpInline" style="width:165px">
  </div>
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Tanggal Check Out</label>
  </div>
  <div class="col-auto">
    <input type="date" name="tgl_cekout" class="form-control" value="{{ $print[0]->tgl_cekout }}" aria-describedby="passwordHelpInline" style="width:165px">
  </div>
   <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Jumlah Kamar</label>
  </div>
  <div class="col-auto">
    <input type="number" min=0 name="jml_kamar" class="form-control" value="{{ $print[0]->jml_kamar }}" aria-describedby="passwordHelpInline" style="width:70px">
  </div>
<br>
<br>
<br>
<br>
<div class="card border-danger" style="width: 53rem;">
<br>

<div class="mb-2 row">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Nama Pemesan</label>
  </div>
  <div class="col-sm-9">
    <input type="text" name="nama_pemesan" class="form-control geser1"  value="{{ $print[0]->nama_pemesan }}" aria-describedby="passwordHelpInline">
  </div>
</div>
<br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Nama Tamu</label>
  </div>
  <div class="col-sm-9">
    <input type="text" name="nama_tamu" class="form-control geser2"  value="{{ $print[0]->nama_tamu }}" aria-describedby="passwordHelpInline">
  </div>
</div>
<br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Tipe Kamar</label>
  </div>
  <div class="col-sm-9">
    <input type="text" name="tipe_kamar" class="form-control geser3"  value="{{ $print[0]->tipe_kamar }}" aria-describedby="passwordHelpInline">
  </div>
</div>
<br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Email</label>
  </div>
  <div class="col-sm-9">
    <input type="text" name="email" class="form-control geser4" value="{{ $print[0]->email }}" aria-describedby="passwordHelpInline">
  </div>
</div>
<br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">No Handphone</label>
  </div>
  <div class="col-sm-9">
    <input type="number" name="no_hp" class="form-control geser5" value="{{ $print[0]->no_hp }}" aria-describedby="passwordHelpInline" style="weight:50%;">
  </div>
  </div>
  <br>
  
</div>
<br> 
<p class="text-center" style="font-family: 'Lobster', cursive; font-size:20px; "><b>Grand Vacation Hotel </b></p>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      window.print();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>