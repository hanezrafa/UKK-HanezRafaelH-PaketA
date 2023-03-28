@extends('layout.admin')
@section('content')

<form action="{{route('generate-pdf')}}" method="post">
    @METHOD('POST')
    @csrf
    <h4>Mulai Tanggal</h4>
    <input type="date" name="start" id=""><br>
    <h4>Sampai Tanggal</h4>
    <input type="date" name="end" id=""> <br>
    <button type="submit">Download</button><br><br>
</form>
<form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            aria-current="page">Logout</button>
                        </form>


@endsection