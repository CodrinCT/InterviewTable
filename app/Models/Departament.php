<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Angajat;
class Departament extends Model
{
    use HasFactory;

    protected $table = 'departamente';

     public function angajati()
    {
        return $this->hasMany(Angajat::class, 'id_departament','id_departament');
    }


        /**
         * Get all of the salarii for the Departament
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
         */
        // public function salarii(): HasManyThrough
        // {
        //     return $this->hasManyThrough(Comment::class, Post::class);
        // }

}

