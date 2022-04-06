
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
<body class="hold-transition sidebar-mini" style="background-color : #ddd">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  
  <!-- Main Sidebar Container -->
 
  
    
  <!-- /.content-wrapper -->

  <div class="container mt-5" style="margin-left: 500px; margin-top:50px;  ">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin-top: -20px;">Edit Fasilitas Kamar</h2>
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

<div class="container mt-5" style="margin-top: 40px; margin-left:280px;">
    <div class="card text-dark bg-light mb-3" style="max-width: 80rem;background-color: white;margin-top: -10px;">
        <div class="card-body">

            <form action="{{ route('faskamar.update', $faskamar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="container mt-5" style="margin-top: 40px; margin-bottom:25px;">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tipe Kamar:</strong>
                            <input type="text" name="tipe_kamar" value="{{ $faskamar->tipe_kamar }}"
                                class="form-control" placeholder="Tipe Kamar">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Fasilitas:</strong>
                            <input type="text" name="nama" value="{{ $faskamar->nama }}" class="form-control"
                                placeholder="Nama Fasilitas">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gambar:</strong>
                            <input type="file" name="image" value="{{ $faskamar->image }}" class="form-control"
                                placeholder="Gambar">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gambar sebelumnya :</strong><br>
                            <img src="{{ asset("Gambar/$faskamar->image") }}" alt="" class="img-thumbnail"
                                style="width:400;height:200px">

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="btn" href="{{ route('faskamar.index') }}" style="
                                color: #ff8585;text-decoration-line: underline;"> Kembali</a>
                        <button type="submit" class="btn"
                            style="background-color: #65C18C;color: white;">Edit</button>

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
  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>

 


    
  
   


   