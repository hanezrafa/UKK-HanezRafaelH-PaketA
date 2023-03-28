@extends('layout.petugas')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tanggapan.index') }}"> Back</a>
                <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn primary"
                            aria-current="page">Logout</button>
                        </form>
            </div>
        </div>
    </div>
    <br>   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('tanggapan.store',$pengaduan->id_pengaduan) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK:</strong>
                    <input type="text disabled" name="nik" class="form-control" placeholder="NIK" value="{{$pengaduan->nik}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Laporan:</strong>
                    <input type="text disabled" name="isi_laporan" class="form-control" placeholder="Laporan" value="{{$pengaduan->isi_laporan}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <img src="{{ asset('storage/'. $pengaduan->foto) }}" alt="" style="width:150px; height:100px;">         
                </div>
            </div>
        </form>
            <form action="/tanggapan" method="post">
                @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggapan:</strong>
                    <input type="text" name="tanggapan" class="form-control">
                    <input type="hidden" name="id_pengaduan" class="form-control" value="{{ $pengaduan->id_pengaduan }}" >

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Ubah Status</button>
            </div>
            </form>
        </div>
        
    
@endsection