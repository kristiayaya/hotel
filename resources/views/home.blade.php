
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')

</head>
<body class="hold-transition sidebar-mini">

    @if(Auth::user()->roles[0]['name'] == 'admin')
    
    <div class="wrapper" style="background-color : #f5faff">
    @endif

    @if(Auth::user()->roles[0]['name'] == 'resepsionis')
    
    <div class="wrapper" style="background-color : #ffffff">
    @endif


  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <div class="container">
   
      @if(Auth::user()->roles[0]['name'] == 'admin')
    <img src="{{ asset('Gambar/admin.png')}}" alt="" style="vertical-align: middle;border-style: none;width: 100%;height: 700px;background-size: cover;">
      @endif

       
      @if(Auth::user()->roles[0]['name'] == 'resepsionis')
    <img src="{{ asset('Gambar/resepsionis.png')}}" alt="" style="vertical-align: middle;border-style: none;width: 100%;height: 700px;background-size: cover;">
      @endif

  </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


</div>


@include('Template.script')
</body>
</html>
