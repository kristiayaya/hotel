@extends('faskamar.layout')
 
@section('content')
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
            <th>Jumlah Kamar</th>
            <th>Nama Fasilitas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($faskamar as $i => $fas)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fas->tipe_kamar }}</td>
            <td>{{ $fas->jml_kamar }}</td>
            <td>{{ $fas->nama }}</td>
            <td>
                <img src="{{ url('/thumbnail_images/') . '/' . $fas->image }}" alt="{{$fas->image}}">
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
  
    {!! $faskamar->links() !!}
      
@endsection