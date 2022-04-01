
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
                <h2>Data Fasilitas Hotel Hebat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fashotel.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Fasilitas</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach ($fashotel as $i => $fas)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fas->nama }}</td>
            <td>{{ $fas->keterangan }}</td>
            <td>
                <img src="{{ url('/Gambar/') . '/' . $fas->image }}" alt="{{$fas->image}}" style="width:150px; height:100px">
            </td>
            <td>
                <form action="{{ route('fashotel.destroy',$fas->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('fashotel.show',$fas->id) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('fashotel.edit',$fas->id) }}">Edit</a>
   
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

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('Template.script')
</body>
</html>

 

 