<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Model\Mahasiswa\MahasiswaModel;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        return view('Mahasiswa/Hasil/hasil');
    }

    
}
