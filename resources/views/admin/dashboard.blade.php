@php
    use App\Models\Pengaduan;

    
@endphp

@extends('layout.admin')
@section('content')

<h4>Selamat datang, {{Auth::user()->username}}</h4>
<h4></h4>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Total Data Selesai : {{ $total; }}</p>
  </div>
</div><br><br>

<form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger" >Logout</button>
</form>


@endsection