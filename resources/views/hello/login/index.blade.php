{{-- @if (session()->has('loginError'))
    <div class="alert alert-danger mt-2">
    <p>{{ session('loginError') }}</p>
    </div>
@endif
    <form action="{{ route('authentication') }}" method="post">
    @csrf
    <h1>UserName</h1>
    <input type="text" placeholder="Username" name="username" value="{{ old('username') }}"><br>
    <h1>Password</h1>
    <input type="password" placeholder="Password" name="password" value="{{ old('password') }}"><br>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form> --}}
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
                <form action="/login" method="POST">
                   @csrf
                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control mt-2" id="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-4" style="background-color:#fc7703;" type="submit">Submit</button>
                    
                </form>
                <small class="d-block text-center mt-3">Belum punya akun? <a href="/regis">Register</a></small>

            </main>
        </div>
    </div>
</div>
@endsection
