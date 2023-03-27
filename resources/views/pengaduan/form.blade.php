@extends('layout.master')
@section('content')
<div class="row justify-content-center">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
   
                <div class="container">
                <h2>Selamat Datang {{Auth::user()->username}}</h2>
                    <main class="form-register">
                        <form action="/pengaduan" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="form-floating">
                                <label for="isi_laporan">Laporan</label>
                                <textarea name="isi_laporan" placeholder="Ketik Pengaduanmu" class="form-control"></textarea>
                            </div>
                            <div class="form-floating">
                            <label for="file">File</label>
                                <input type="file" name="foto" class="form-control" placeholder="Choose File">
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-4" style="background-color:#fc7703;" type="submit">Submit</button>
                        
                        </form>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"
                            aria-current="page">Logout</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
@endsection