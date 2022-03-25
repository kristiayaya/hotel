
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
  <div class="content-wrapper">
    
  <!-- /.content-wrapper -->
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Kamar</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reservasi.index') }}"> Kembali</a>
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
   
<form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek In:</strong>
                <input type="date" name="tgl_cekin" class="form-control" placeholder="Tanggal Cek In">
            </div>
            </div>
           
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Cek Out:</strong> 
                <input type="date" name="tgl_cekout" class="form-control" placeholder="Tanggal Cek Out">
            </div>
            </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar:</strong>
                <input type="number" name="jml_kamar" class="form-control" placeholder="Jumlah Kamar">
            </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Handphone:</strong>
                <input type="number" name="no_hp" class="form-control" placeholder="No Handphone">
            </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pemesanan:</strong>
                <input type="text" name="nama_pemesanan" class="form-control" placeholder="Nama Pemesanan">
            </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu:</strong>
                <input type="text" name="nama_tamu" class="form-control" placeholder="Nama Tamu">
            </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar">
            </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
  <!-- Control Sidebar -->
  </div>
    <!-- Control sidebar content goes here -->
  <!-- /.control-sidebar -->
    </div>
  <!-- Main Footer -->
  <footer class="main-footer">
    @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>

 

  
