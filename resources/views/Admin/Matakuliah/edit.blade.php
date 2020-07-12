@extends('admin/layout/main')
@section('title', 'Data Matakuliah')
@section('content')

<div class="head-content pb-5">
    <h5>Data Matakuliah / Edit / {{$data['nama_matkul']}}</h5>
</div>

<div class="pl-4" style="width: 90%;">
    <form action="{{URL::to('/admin/matakuliah/update')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kode Matakuliah</label>
            <div class="col-sm-10">
                <input type="text" name="kode_matkul" class="form-control" id="colFormLabel" value="{{$data['kode_matkul']}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Matakuliah</label>
            <div class="col-sm-10">
                <input type="text" name="nama_matkul" class="form-control" id="colFormLabel" value="{{$data['nama_matkul']}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah SKS</label>
            <div class="col-sm-10">
                <input type="number" name="jumlah_sks" class="form-control" id="colFormLabel" value="{{$data['jumlah_sks']}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Jumlah SKS Bayar</label>
            <div class="col-sm-10">
                <input type="number" name="jumlah_sks_bayar" class="form-control" id="colFormLabel" value="{{$data['jumlah_sks_bayar']}}">
            </div>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection