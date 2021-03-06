
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
  <style>
    .main-sidebar{
        min-height:109% !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->
  @include('Template.sidebar')
  <!-- Main Sidebar Container -->
 
  <!-- Content Wrapper. Contains page content -->
 
    
  <!-- /.content-wrapper -->
<div class="container mt-5" style="margin-left: 60px; margin-top:20px;  " >


  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-left:610px">
            <h2>Tambah Data Fasilitas Kamar</h2>
        </div>
        <div class="pull-right" style="margin-top:40px; margin-left:65px;">
            <a class="btn btn-primary" href="{{ route('faskamar.index') }}"> Kembali</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
   <div class="container mt-5" style="margin-top: 40px; margin-left:60px;">
   <div class="card text-dark bg-light mb-3" style="max-width: 500rem; width:90rem; ">

<form action="{{ route('faskamar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
  <div class="card-body">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                 <select name="tipe_kamar" id="tipe_kamar" class="form-control">
          <option selected class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Pilih salah satu tipe kamar</option>
          <option value="Superior">Superior</option>
          <option value="Deluxe">Deluxe</option>
      </select>
            </div>
            </div>
           
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas:</strong> 
                <input type="text" name="nama" class="form-control" placeholder="Nama Fasilitas">
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong> 
                <input type="file" name="image" class="form-control" placeholder="Gambar">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
       </div>
  <!-- Control Sidebar -->
  </div>
    <!-- Control sidebar content goes here -->
  <!-- /.control-sidebar -->
    </div>
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>

 

  