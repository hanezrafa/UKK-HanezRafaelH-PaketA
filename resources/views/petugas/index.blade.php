@extends('layout.petugas')
     
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Pengaduan</h2>
            </div>
            <div class="pull-right">
                <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
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
            <th>No</th>
            <th>Foto</th>
            <th>NIK</th>
            <th>Laporan</th>
            <th>Status</th>
            <th>Kondisi</th>
            <th width="280px">Action</th>
        </tr>
        <?php $i = 0; ?>
        @foreach ($pengaduan as $aduan)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ asset('storage/'. $aduan->foto) }}" alt="" style="width:150px; height:100px;"></td>
            <td>{{ $aduan->nik }}</td>
            <td>{{ $aduan->isi_laporan }}</td>
            <td>{{ $aduan->status }}</td>
            <td>{{ $aduan->kondisi }}</td>
            <td>      
                @if ($aduan->status == 'selesai')
                    <button class="btn btn-primary" disable >Ubah Status</button>
                @elseif ($aduan->status == 'proses' || 0) 
                    <a class="btn btn-primary" href="{{ route('tanggapan.show',$aduan->id_pengaduan) }}" >Ubah Status</a>
                @endif
                <form action="{{ route('pengaduan.destroy',$aduan->id_pengaduan) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    @if($aduan->status == 'selesai')
                        <p>Data Selesai</p>
                    @elseif($aduan->status == 'proses')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    

        
@endsection