@extends('admin/layout/main')
@section('title', 'Detail Matkul')

@section('content')

<div class="head-content">
    <h5> <a href="{{URL::to('/admin/detailmatkul')}}">Detail Matakuliah</a> / <a href="{{URL::to('/admin/detailmatkul/'.$data_fakultas['kode_fakultas'])}}">{{$data_fakultas['nama_fakultas']}}</a> / {{$data_progdi['nama_progdi']}}</h5>
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

<div class="p-2">
    <a href="{{URL::to('/admin/detailmatkul/tambah/'.$data_fakultas['kode_fakultas'].'/'.$data_progdi['kode_progdi'])}}"><button class="btn btn-sm btn-success">Tambah</button></a>
</div>

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Kode Matakuliah</th>
            <th scope="col">Nama Matakuliah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
        <tr>
            <td>{{ $dt['kode_matkul'] }}</td>
            <td>{{ $dt['nama_matkul'] }}</td>
            <td class="aksi">
                <button type="button" class="btn btn-sm btn-danger text-light" data-toggle="modal" data-target="#confirm-delete" data-href="{{URL::to('/admin/detailmatkul/delete/'.$data_fakultas['kode_fakultas'].'/'.$data_progdi['kode_progdi'].'/'.$dt['detail_matkul'])}}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<!----modal delete confirm--->
<div id="confirm-delete" class="modal fade" role='dialog'>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body" id="modal-body">
                Are you sure delete ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-sm btn-danger btn-delete">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')

<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
    });
</script>

@endsection