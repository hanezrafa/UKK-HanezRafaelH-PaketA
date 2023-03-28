<!DOCTYPE html>
<html>
<head>

    <title>Laporan Pengaduan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
@php
use App\Models\User;
@endphp
  
    <table class="table table-bordered">
        <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Status</th>
        </tr>
        @foreach($pengaduan as $p)
        <tr>
            <td>{{ sprintf("%05d", $p->id_pengaduan) }}</td>
            <td>{{ $p->tgl_pengaduan }}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->status }}</td>

        </tr>
        @endforeach
    </table>
  
</body>
</html>