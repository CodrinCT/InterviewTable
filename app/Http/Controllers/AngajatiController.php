<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angajat;
use App\Models\Departament;


class AngajatiController extends Controller
{
     public function getPage(Request $request)
    {
        $angajati = Angajat::paginate(10);
        $departementSearch = false;

        return view('angajati',['angajati'=>$angajati, 'departementSearch'=>$departementSearch]);
    }

    public function getMoreAngajati(Request $request){
            $angajati = Angajat::paginate(10);
        $departementSearch = false;

        return view('angajati_data',['angajati'=>$angajati, 'departementSearch'=>$departementSearch]);

    }

    public function searchAngajati(Request $request){
           $angajati = Angajat::where("{$request->searchLocation}", 'LIKE', "%{$request->search}%")->paginate(10);
        return view('angajati_data',['angajati'=>$angajati]);
    }

}
