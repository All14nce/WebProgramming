<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index() {
        $arrDosen = ["Angga Budiarto","Fajar Muhammad","Lidia Nisa","Jeremy Python"];
        return view('universitas.dosen')->with('univ','Bina Nusantara')
        ->with('jur','Teknik Informatika')
        ->with('listDosen',$arrDosen);
    }
}
