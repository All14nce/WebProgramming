<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('master');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function() {
//     return "Hello World";
// });

// Route::get('/belajar', function() {
//     echo '<h1>Hello World</h1>';
//     echo '<p>Sedang belajar laravel</p>';
// });

// Route::get('/mahasiswa/socs/pandi', function() {
//     echo '<h1 style="text-align:center">Hello Pandi</h1>';
// });

// Route::get('/mahasiswa/{nama?}/{kelas?}', function($nama='Anto', $kelas='PPTI14') {
//     return "Data mahasiswa yang tampil $nama - $kelas";
// });

// Route::get('users/{id}', function ($id) {
//     return "tampilkan id $id";
// })->where('id', '[A-Z]{2}[0-9]+');

/*
kirim data ke view
1. Menggunakan pada parameter dari view
2. Menggunakan method with()
*/

/*
cara pemanggilan controller pada route:
Route::get(/url, ['namaController', 'namaFungsi'])
*/

Route::get('/ppti', [MahasiswaController::class, 'index']);
Route::get('/ppti/admin', [MahasiswaController::class, 'tampilAdmin']);

Route::prefix('/admin')->group(function() {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('adminMahasiswa');
    Route::get('/dosen', [DosenController::class, 'index'])->name('adminDosen');
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('adminKaryawan');
});

Route::prefix('/mahasiswa')->group(function() {
    Route::get('/{nama}/{umur}/{kotaAsal}', function() {
        $nama = "Lisa";
        $umur = 19;
        $kotaAsal = "Bandung";
        return view('exercise.lisa', ['nama'=>$nama,'umur'=>$umur,'kotaAsal'=>$kotaAsal]);
    });

    Route::get('/{nama}/{umur}/{kotaAsal}', function() {
        $nama = "Rudi";
        $umur = 24;
        $kotaAsal = "Jakarta";
        return view('exercise.rudi', ['nama'=>$nama,'umur'=>$umur,'kotaAsal'=>$kotaAsal]);
    });

});

// anonymous function / callback function

// Route::<jenismethod>(<URL>, proses diexec)

// get, post, put, delete

Route::get('/create', [InfoController::class, 'massAssignment']);
Route::get('/update', [InfoController::class, 'update']);