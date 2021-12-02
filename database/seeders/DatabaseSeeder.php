<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departament;
use App\Models\Angajat;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Departament::factory(1000)->has(Angajat::factory()->count(2), 'angajati')->create();
    }
}
