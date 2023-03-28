@extends('layout.master')
     
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ayo Lihat Data Pengaduan Orang Sekitarmu</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>
    <br>
    @php
        use App\Models\Pengaduan;
    @endphp
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIK</th>
            <th>Laporan</th>
            <th>Status</th>
        </tr>
        @php
            $jenis = "umum";
            $pengaduan = Pengaduan::all()->where('kondisi', $jenis);
        @endphp
        <?php $i = 0; ?>
        @foreach ($pengaduan as $aduan)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="{{ asset('storage/'. $aduan->foto) }}" alt="" style="width:150px; height:100px;"></td>
            <td>{{ $aduan->nik }}</td>
            <td>{{ $aduan->isi_laporan }}</td>
            <td>{{ $aduan->status }}</td>
        </tr>
        @endforeach
    </table>
    

        
@endsection