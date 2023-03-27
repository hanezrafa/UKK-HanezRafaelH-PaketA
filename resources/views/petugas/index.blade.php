{{-- @extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Pengaduan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="#"> Laporan</a>
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
            <td>      
                    <a class="btn btn-primary" href="{{ route('tanggapan.show',$aduan->id_pengaduan) }}">Ubah Status</a>
            </td>
        </tr>
        @endforeach
    </table>
    

        
@endsection --}}
