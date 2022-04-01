
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

  <div class="container mt-3">

      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Data Fasilitas Kamar</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('faskamar.create') }}"> Input Data</a>
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
                <th>Tipe Kamar</th>
                <th>Nama Fasilitas</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            @foreach ($faskamar as $i => $fas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $fas->tipe_kamar }}</td>
                <td>{{ $fas->nama }}</td>
                <td>
                    <img src="{{ url('/Gambar/') . '/' . $fas->image }}" alt="{{$fas->image}}" style="width:150px; height:100px">
                    
                </td>
                
                <td>
                    <form action="{{ route('faskamar.destroy',$fas->id) }}" method="POST">
                            
                            <a class="btn btn-info" href="{{ route('faskamar.show',$fas->id) }}">Tampil</a>
                            
                            <a class="btn btn-primary" href="{{ route('faskamar.edit',$fas->id) }}">Edit</a>
                            
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <!-- Control Sidebar -->
            
            <!-- Control sidebar content goes here -->
            <!-- /.control-sidebar -->
        </div>
        <!-- Main Footer -->
        
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    
</div>
    @include('Template.script')
</body>
</html>

 

 