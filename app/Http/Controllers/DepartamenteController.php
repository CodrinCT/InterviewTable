<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departament;
use App\Models\Angajat;

class DepartamenteController extends Controller
{
      public function getPage()
    {
        $departamente = Departament::paginate(10)->withQueryString();
        foreach ($departamente as $key => $value) {
            $avgSalariu = Angajat::where('id_departament', $value->id_departament)->avg('salariu');
            $data[] = [$value, $avgSalariu];
        };
        return view('departamente',['data'=>$data, 'departamente'=>$departamente]);
    }
}
