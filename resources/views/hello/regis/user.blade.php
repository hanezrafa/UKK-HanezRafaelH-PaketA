@extends('layout.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session ('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <main class="form-register">
                <form action="/regis" method="POST">
                   @csrf
                    <h1 class="h3 mb-3 fw-normal">Register</h1>

                    <div class="form-floating">
                        <input type="text" name="nama_petugas" class="form-control mt-2" id="nama_petugas" placeholder="name">
                        <label for="nama_petugas">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="nik" class="form-control mt-2" id="nik" placeholder="NIK">
                        <label for="nik">Nik</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control mt-2" id="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="telp" class="form-control mt-2" id="telp">
                        <label for="telp">Telepon</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" style="background-color:#fc7703;" type="submit">Submit</button>
                    
                </form>
                <small class="d-block text-center mt-3">Sudah punya akun? <a href="/">Login</a></small>
            </main>
        </div>
    </div>
</div>
@endsection