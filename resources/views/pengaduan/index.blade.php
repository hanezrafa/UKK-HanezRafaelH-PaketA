 @extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Pengaduan, Selamat Datang {{Auth::user()->username}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pengaduan.create') }}"> Create</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>Foto</th>
            <th>Laporan</th>
            <th>Nik</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($pengaduan as $aduan) 
        <tr>
            <td><img src="{{ asset('storage/'.$aduan->foto) }}" alt="" style="height:100px;width:100px;"></td>
            <td>{{ $aduan->isi_laporan }}</td>
            <td>{{ $aduan->nik }}</td>
            <td>{{ $aduan->status }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('pengaduan.show',$aduan->id_pengaduan) }}">Show</a>
                
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection
