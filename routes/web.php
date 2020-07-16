<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Admin\DashboardController@index');
Route::get('/hasil', 'Mahasiswa\HasilController@index');


Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/login', 'Admin\LoginController@index');
    Route::post('/valid', 'Admin\LoginController@validator');
    Route::get('/logout', 'Admin\LoginController@logout');
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/', 'Admin\MahasiswaController@index');
        Route::get('/tambah', 'Admin\MahasiswaController@add');
        Route::post('/insert', 'Admin\MahasiswaController@insert');
        Route::get('/edit/{nim}', 'Admin\MahasiswaController@edit');
        Route::post('/update', 'Admin\MahasiswaController@update');
        Route::get('/delete/{nim}', 'Admin\MahasiswaController@delete');
        Route::get('/getProgdi/{kode}', 'Admin\MahasiswaController@getProgdi');
        Route::get('/pagination/{page}', 'Admin\MahasiswaController@pagination');
        Route::post('/search', 'Admin\MahasiswaController@search');
    });
    Route::prefix('fakultas')->group(function () {
        Route::get('/', 'Admin\FakultasController@index');
        Route::get('/tambah', 'Admin\FakultasController@add');
        Route::post('/insert', 'Admin\FakultasController@insert');
        Route::get('/edit/{kode}', 'Admin\FakultasController@edit');
        Route::post('/update', 'Admin\FakultasController@update');
        Route::get('/delete/{kode}', 'Admin\FakultasController@delete');
        Route::get('/{kode}', 'Admin\FakultasController@show');
    });
    Route::prefix('progdi')->group(function () {
        Route::get('/tambah/{kode}', 'Admin\ProgdiController@add');
        Route::post('/insert', 'Admin\ProgdiController@insert');
        Route::get('/edit/{kode}', 'Admin\ProgdiController@edit');
        Route::post('/update', 'Admin\ProgdiController@update');
        Route::get('/delete/{kode_progdi}/{kode_fakultas}', 'Admin\ProgdiController@delete');
    });
    Route::prefix('dosen')->group(function () {
        Route::get('/', 'Admin\DosenController@index');
        Route::get('/tambah', 'Admin\DosenController@add');
        Route::post('/insert', 'Admin\DosenController@insert');
        Route::get('/edit/{kode}', 'Admin\DosenController@edit');
        Route::post('/update', 'Admin\DosenController@update');
        Route::get('/delete/{kode}', 'Admin\DosenController@delete');
    });
    Route::prefix('matakuliah')->group(function () {
        Route::get('/', 'Admin\MatakuliahController@index');
        Route::get('/tambah', 'Admin\MatakuliahController@add');
        Route::post('/insert', 'Admin\MatakuliahController@insert');
        Route::get('/edit/{kode}', 'Admin\MatakuliahController@edit');
        Route::post('/update', 'Admin\MatakuliahController@update');
        Route::get('/delete/{kode}', 'Admin\MatakuliahController@delete');
    });
    Route::prefix('ruangan')->group(function () {
        Route::get('/', 'Admin\RuanganController@index');
        Route::get('/tambah', 'Admin\RuanganController@add');
        Route::post('/insert', 'Admin\RuanganController@insert');
        Route::get('/edit/{kode}', 'Admin\RuanganController@edit');
        Route::post('/update', 'Admin\RuanganController@update');
        Route::get('/delete/{kode}', 'Admin\RuanganController@delete');
    });

    Route::prefix('detailmatkul')->group(function () {
        Route::get('/', 'Admin\DetailMatkulController@index');
        Route::get('/tambah/{kode_f}/{kode_p}', 'Admin\DetailMatkulController@add');
        Route::post('/insert', 'Admin\DetailMatkulController@insert');
        Route::get('/delete/{kode_f}/{kode_p}/{kode_d}', 'Admin\DetailMatkulController@delete');
        Route::get('/{kode}', 'Admin\DetailMatkulController@show');
        Route::get('/{kode_f}/{kode_p}', 'Admin\DetailMatkulController@showMatkul');
    });
});
