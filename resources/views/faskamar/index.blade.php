<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
    <style>
        .main-sidebar {
            min-height: 109% !important;
        }

    </style>
</head>
<body class="hold-transition sidebar-mini" style="background-color : #ddd">

    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <div class="container mt-5" style="margin-left: 160px;">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left" style="margin-bottom:50px; margin-left:590px">
                        <h2 style="margin-left : -20px">Data Fasilitas Kamar</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('faskamar.create') }}" style="margin-left: 8px;background-color: #ffc300;border: 0px;"> Input Data</a>
                    </div>
                </div>
            </div>


            <div class="container" style="width:123%; max-width: 125%;">
                <table class="table table-bordered " style=" margin-top:1%; border-color: red; background-color : white">
                    <thead style="background-color: #262424;color: #ececec;">
                        <tr style="border-color: red;">

                            <th>No</th>
                            <th>Tipe Kamar</th>
                            <th>Nama Fasilitas</th>
                            <th style="text-align: center;">Gambar</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faskamar as $i => $f)

                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $f->tipe_kamar }}</td>
                            <td>{{ $f->nama }}</td>
                            <td style="text-align: center;">
                                {{-- <img src="{{ asset("Gambar/$f->image") }}" height="100" width="100" alt="" class="img-thumbnail"> --}}
                                <img src="{{ asset("Gambar/$f->image") }}" height="100" width="100" alt="">

                            </td>

                            <td style="text-align-last: center;">
                                <form action="{{ route('faskamar.destroy',$f->id) }}" method="POST" style="margin-top: 30px;">

                                    <a class="btn btn-success" href="{{ route('faskamar.show',$f->id) }}">Tampil</a>

                                    <a class="btn btn-primary" href="{{ route('faskamar.edit',$f->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
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
