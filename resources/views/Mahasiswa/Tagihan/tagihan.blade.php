@extends('mahasiswa/layout/main')
@section('title', 'Dashboard')
@section('content')

<div class="head-content">
    <h5>Tagihan</h5>
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
            <th scope="col">No</th>
            <th scope="col">Item</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody id="table-body">

    </tbody>
</table>

<button class="btn btn-sm btn-success">Download Tagihan</button>

@endsection