
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
  <div class="container mt-3">

    
  <!-- /.content-wrapper -->
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Reservasi</h2>
            </div>
            
        </div>
    </div>


      <!-- SidebarSearch Form -->

<br>
<div class="container">
  <div class="row ">
  <div class="col col-md-1">
      <form action="{{route('cari')}}" method="post" style="width:200px; height:30px; margin-left:-150px;">
      @csrf
      
        <div class="input-group" data-widget="sidebar-search" style="width:250px; height:40px;">
          <input class="form-control form-control-sidebar"name="cari" type="search" placeholder="Cari Nama Tamu" aria-label="Search" style="width:200px; height:40px;">
          <div class="input-group-append">
            <button type="submit" class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
      </div>
      </form>
      </div>
    <div class="col col-md-9">
    </div>
      <form action="{{route('reservasi.filtering')}}"  style="width:50px; height:30px;" method="post">
    <div class="col col-md-4">
      @csrf
    <div class="row row-md-5">
      <div class="col col-md-6">
      <input type="date" name="tgl_cekin" class="form-control" aria-describedby="passwordHelpInline" style="height:40px; width:200px; margin-right:0px">
   </div>
      <div class="col col-md-6">
      <button class="btn btn-warning" type="submit" style="margin-left:210px; top:-40px; position: relative;">cari</button>
    </div>
    </div>  
    </form>
      

    <!-- <label for="inputPassword6" class="col-form-label">Check In</label> -->
    
    
          </div>
    </div>



    <div class="input-group-append">
   
      
    
  </div>
</div>

   <br>
   <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="
    width: 1350px;
    margin-left: -141px;
">
        <tr>
            <th>No</th>
            <th>Tanggal Cek In</th>
            <th>Tanggal Cek Out</th>
            <th>Jumlah Kamar</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Nama Pemesanan</th>
            <th>Nama Tamu</th>
            <th>Tipe Kamar</th>
            <th>Aksi</th>
        </tr>
        @foreach ($reservasi as $i => $fas)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fas->tgl_cekin }}</td>
            <td>{{ $fas->tgl_cekout }}</td>
            <td>{{ $fas->jml_kamar }}</td>
            <td>{{ $fas->email }}</td>
            <td>{{ $fas->no_hp }}</td>
            <td>{{ $fas->nama_pemesan }}</td>
            <td>{{ $fas->nama_tamu }}</td>
            <td>{{ $fas->tipe_kamar }}</td>
            
            <td>
                <form action="{{ route('reservasi.destroy',$fas->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('reservasi.show',$fas->id) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('reservasi.edit',$fas->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
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

 
