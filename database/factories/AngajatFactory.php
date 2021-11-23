<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Angajat;
use Illuminate\Support\Str;


class AngajatFactory extends Factory
{

    protected $model = Angajat::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_departament'=> rand(1, 100),
            'nume' => $this->faker->name(),
            'prenume' =>$this->faker->name(),
            'CNP'=> rand(145, 999),
            'functie'=> Str::random(10),
            'salariu'=> rand(2000,5000),
            'zile_concediu'=>rand(0,14)
        ];
    }
}
