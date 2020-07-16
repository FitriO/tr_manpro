@extends('mahasiswa/layout/main')
@section('title', 'Dashboard')
@section('content')

<div class="head-content">
    <h5>Kartu Studi</h5>
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
            <th scope="col">B/U</th>
            <th scope="col">SKS</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody id="table-body">

    </tbody>
</table>

@endsection