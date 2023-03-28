@extends('layout.master')

@php
use App\Models\User;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
@endphp
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Laporan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pengaduan.create') }}"> Create</a>
                <a class="btn btn-primary" href="{{ route('pengaduan.index') }}"> Back</a>

            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <center>
    <div class="card" style="width: 40rem; height:100%">
        <img src="{{ asset('storage/'.$pengaduan->foto) }}" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title text-left"> <strong>Isi Laporan</strong> : {{ $pengaduan->isi_laporan }}</h5>
            <h5 class=" text-left"><strong>NIK :</strong>{{ $pengaduan->nik }}</h5><br>
            @php
                $user = User::where('nik', $pengaduan->nik)->first();
            @endphp
            <h5 class=" text-left"><strong>Nama :</strong>{{ $user->username }}</h5><br> 
            <h5 class=" text-left"><strong>Telp :</strong>{{ $user->telp }}</h5><br>
            @php 
                $tanggapan = Tanggapan::where('id_pengaduan', $pengaduan->id_pengaduan)->first();
            @endphp
            @if ($pengaduan->status == 'selesai')
                <h4 class="card-title text-left">Tanggapan Laporan : {{ $tanggapan->tanggapan }}</h4><br>
            @elseif ($pengaduan->status == 'proses') 
                <h4 class="card-title text-left">Tanggapan Laporan : Belum ada tanggapan</h4><br>

            @endif

        </div>
    </div>
    </center>


       


  
 
    

        
@endsection