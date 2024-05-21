<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index() {
        // $namamhs2=" Budi Doremi";
        $arrMahasiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Pacul", "Lisa Permata"];
        $title = "List Mahasiswa";
        $nilai = 75;
        return view('universitas.mahasiswa', ['listMhs'=>$arrMahasiswa, 'judul'=>$title, 'nilai'=>$nilai]);
    }

    public function tampilAdmin() {
        return "ini adalah hasil pemanggilan dari mahasiswa";
    }
}
