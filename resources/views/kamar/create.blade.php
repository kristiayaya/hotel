
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
  <!-- Main Sidebar Container -->
 
  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->
 <div class="container mt-5" style="margin-left: 160px; margin-top:20px;" >


  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left" style="margin-top:10px; margin-left:550px;">
            <h2>Tambah Data Kamar</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('kamar.index') }}"> Kembali</a>
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
   

    <div class="container mt-5" style="margin-top: 60px; margin-left:130px;">

    <div class="card" style="width: 70rem; background-color:#F0F8FF">
  <div class="card-body">
    <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
         <select name="tipe_kamar" id="tipe_kamar" class="form-control mb-3">
                    <option selected class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Pilih salah satu tipe kamar</option>
                    <option value="Superior">Superior</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
            </div>


  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar:</strong> 
                <input type="number" name="jml_kamar" class="form-control" placeholder="Jumlah Kamar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>

  </div>
</div>


  <!-- Control Sidebar -->
  </div>
    <!-- Control sidebar content goes here -->
  <!-- /.control-sidebar -->
    </div>
  <!-- Main Footer -->
  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>

 

  
