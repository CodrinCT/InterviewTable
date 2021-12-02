<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angajat;
use App\Models\Departament;


class AngajatiController extends Controller
{
     public function getPage(Request $request)
    {
        $angajati = Angajat::with('departament')->paginate(10);
        $searchLocation = null;


        return view('angajati',['angajati'=>$angajati, 'searchLocation'=>$searchLocation]);
    }

    public function getMoreAngajati(Request $request){
            $angajati = Angajat::with('departament')->paginate(10);
        $searchLocation = null;

        return view('angajati_data',['angajati'=>$angajati, 'searchLocation'=>$searchLocation]);

    }

    public function searchAngajati(Request $request){
        $angajati=null;
        // $departementSearch=null;
        $searchLocation = $request->searchLocation;
        if( $searchLocation == 'departament'){
            $departamente = Departament::where("nume", "LIKE", "%{$request->search}%")->paginate(10);
            // dd($departamente);
            foreach ($departamente as $key => $value) {
            $angajati[] = Angajat::join('departamente', 'angajati.id_departament', '=', 'departamente.id_departament')->where('departamente.id_departament', '=', "{$value->id_departament}")->get('angajati.*');
            }
            
            // dd($angajati);
            
        }else{
            $angajati = Angajat::where("{$request->searchLocation}", 'LIKE', "%{$request->search}%")->paginate(10);

        }
        return view('angajati_data',['angajati'=>$angajati, 'searchLocation'=>$searchLocation]);
    }

}
