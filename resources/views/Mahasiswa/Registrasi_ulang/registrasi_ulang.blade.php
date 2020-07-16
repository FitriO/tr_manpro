@extends('mahasiswa/layout/main')
@section('title', 'Dashboard')
@section('content')

<div class="head-content">
    <h5>Registrasi Ulang</h5>
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

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Kuliah
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Kuliah</a>
    </div>
  </div>
</div>

@endsection