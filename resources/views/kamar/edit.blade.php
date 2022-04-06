
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
  <div class="container mt-5" style="margin-left: 160px; margin-top:20px;" >

    <div class="pull-right">
                  <a class="btn btn-primary" style="margin-left:180px;" href="{{ route('kamar.index') }}"> Kembali</a>
              </div>
          </div>
      </div>
  
  
    @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
  
  <div class="card text-dark bg-Powder Blue mb-3" style="width: 1050px; height:400px; margin-top:50px; margin-left:350px; background-color :	#B0E0E6 ">
   
    <div class="card-body bg-Powder Blue mb-3">
  
      <div class="row">
          <div class="col-lg-12 margin-tb ">
              <div class="pull-left " style="margin-top:40px; margin-left:440px;">
                  <h2>Edit Data Kamar</h2>
              </div>
              
     
    
    
      <div class="container mt-5" style="margin-top: 60px;">
  
  <form action="{{ route('kamar.update',$kamar->id) }}" method="POST">
          @csrf
          @method('PUT')
     
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:20px;">
                  <div class="form-group">
                      <strong>Tipe Kamar:</strong>
                      <input type="text" name="tipe_kamar" value="{{ $kamar->tipe_kamar }}" class="form-control" placeholder="Tipe Kamar">
                  </div>
              </div>
  
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Jumlah Kamar:</strong>
                      <input type="number" min=1  name="jml_kamar" value="{{ $kamar->nama }}" class="form-control" placeholder="Jumlah Kamar">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top:30px;" >
                <button type="submit" class="btn btn-primary">EDIT</button>
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

 

  

   


 


    
   
