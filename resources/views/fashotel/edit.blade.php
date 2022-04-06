
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

  <div class="container mt-5" style="margin-left: 400px; margin-top:20px;  " >

    <div class="col-lg-12 margin-tb" >
        <div class="pull-left" style="margin-left:280px;">
            <p style="font-size:40pt;">Edit Fasilitas Hotel</p>
        </div>
        <div class="pull-right" style="margin-top:60px; margin-left:-130px;">
            <a class="btn btn-primary" href="{{ route('fashotel.index') }}"> Kembali</a>
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

 <div class="container mt-5" style="margin-top: 60px; ">

 <div class="card border-primary mb-3" style="max-width: 70rem;">

<div class="card-body text-dark">
 <form action="{{ route('fashotel.update',$fashotel->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="container mt-5" style="margin-top: 40px; margin-bottom:25px;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas:</strong>
                <input type="text" name="nama" value="{{ $fashotel->nama }}" class="form-control" placeholder="Nama Fasilitas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <input type="file" name="image" value="{{ $fashotel->image }}" class="form-control" placeholder="Gambar">
               <br>
                <img src= "{{ asset("Gambar/$fashotel->image") }}" style="width:100;height:100px"/>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan">{{ $fashotel->keterangan }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top:15px;">
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
  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>

 


    
  
   
