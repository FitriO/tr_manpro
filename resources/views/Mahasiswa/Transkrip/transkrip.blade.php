@extends('mahasiswa/layout/main')
@section('title', 'Dashboard')
@section('content')

<div class="head-content">
    <h5>Transkrip Nilai</h5>
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Kode</th>
            <th scope="col">Matakuliah</th>
            <th scope="col">SKS</th>
            <th scope="col">Nilai</th>
            <th scope="col">AK</th>
            <th scope="col">Tahun Ambil</th>
        </tr>
    </thead>
    <tbody id="table-body">

    </tbody>
</table>

@endsection