@extends('mahasiswa/layout/main')
@section('title', 'Dashboard')
@section('content')

<marquee behavior="" direction="">
        <script>
            var tanggallengkap = new String();
            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
            namahari = namahari.split(" ");
            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
            namabulan = namabulan.split(" ");
            var tgl = new Date();
            var hari = tgl.getDay();
            var tanggal = tgl.getDate();
            var bulan = tgl.getMonth();
            var tahun = tgl.getFullYear();
            tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
            document.write('<p id="nav-date">' + tanggallengkap + ' | {{Session::get('nip')}} - {{Session::get('nama')}} - Universitas Kristen Satya Wacana' + '</p>');
        </script>
</marquee>

<center>
<h5 width="80%" style="";>Selamat Datang </h5>
</center>

@endsection