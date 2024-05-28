<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country as CountryModel;
use App\Models\State as StateModel;
use App\Models\City as CityModel;

class InfoController extends Controller
{
    //
    public function massAssignment() {
        //simpan data ke db using ORM Eloquent
        // $mass1 = CountryModel::create([
        //     'name'=>'Indonesia',
        // ]);

        // dump($mass1);

        // $mass1 = StateModel::create([
        //     'name'=>'Jawa Barat',
        //     'country_id'=>'1', # angla 1 itu merujuk PK punya tabel dgn country Indonesia
        // ]);

        // dump($mass1);
    }

    public function update() {
        $country = CountryModel::find(1);
        //untuk updtae field 'name' di tabel country
        $country->name='Jepang';
        $country->save();

        dump($country);
    }
}
