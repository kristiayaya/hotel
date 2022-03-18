@extends('fashotel.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Belajar CRUD di Laravel 7</h2>
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
                <img src="{{ url('/thumbnail_images/') . '/' . $fas->image }}" alt="{{$fas->image}}">
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
  
    {!! $fashotel->links() !!}
      
@endsection