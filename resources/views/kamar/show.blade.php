
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
  <div class="container mt-5" style="margin-left: 160px;">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left" style="margin-bottom:70px;  margin-left:50px">
                        <h2 style="margin-left : 500px">Tampilan Data Kamar</h2>
                    </div>
            <div class="pull-right" style="margin-bottom:15px;">
                <a class="btn btn-primary" href="{{ route('kamar.index') }}" style="margin-left: 300px;  background-color: 	#32CD32;border: 0px;">  Kembali</a>
            </div>
        </div>
    </div>
   
   <div class="container" style="width:50%; height:50%; max-width: 200%; margin-left:415px;">

   <div class="card text-dark bg-warning mb-3" style="width: 100%; height:100%">
  <div class="card-header" ><strong>Tampilan Data Kamar</strong></div>
  <div class="card-body">

    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                {{ $kamar->tipe_kamar }}
            </div>
        </div>


         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar:</strong>
                {{ $kamar->jml_kamar }}
            </div>
        </div>
    </div>
        
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

 

  
