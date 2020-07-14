@extends('admin/layout/main')
@section('title', 'Data Ruangan')
@section('content')

<div class="head-content pb-5">
    <h5>Data Ruangan / Tambah</h5>
</div>

<div class="pl-4" style="width: 90%;">
    <form action="{{URL::to('/admin/ruangan/insert')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kode Ruangan</label>
            <div class="col-sm-10">
                <input type="text" name="kode_ruangan" class="form-control" id="colFormLabel">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Kapasitas</label>
            <div class="col-sm-10">
                <input type="number" name="kapasitas" class="form-control" id="colFormLabel">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" name="lokasi" class="form-control" id="colFormLabel">
            </div>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


@endsection