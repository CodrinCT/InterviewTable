<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departament;
use DB;
class Angajat extends Model
{
    use HasFactory;

    protected $table = 'angajati';

       public function departament(){
        return $this->belongsTo(Departament::class, 'id_departament', 'id_departament');
    }

    public static function getAngajati(){
        $angajati = DB::table('angajati');

        return $angajati->paginate(10);
    }
}
