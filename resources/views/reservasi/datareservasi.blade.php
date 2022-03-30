<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Reservasi</title>
  </head>
  <body>
  <table class="table table-bordered">
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
      @foreach ($data as $i => $dataa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $dataa->tgl_cekin }}</td>
            <td>{{ $dataa->tgl_cekout }}</td>
            <td>{{ $dataa->jml_kamar }}</td>
            <td>{{ $dataa->email }}</td>
            <td>{{ $dataa->no_hp }}</td>
            <td>{{ $dataa->nama_pemesan }}</td>
            <td>{{ $dataa->nama_tamu }}</td>
            <td>{{ $dataa->tipe_kamar }}</td>
        <td>
            <form action="{{ route('cetak', $dataa->id) }}" method="POST" target="_blank">
            @csrf

            <button type="submit" class="btn btn-danger">Cetak</button>
            </form>
            </td>
            </tr>
            @endforeach
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>