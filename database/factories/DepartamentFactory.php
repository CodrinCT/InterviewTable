<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departament;

class DepartamentFactory extends Factory
{
     protected $model = Departament::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nume'=> $this->faker->word(10),
            'descriere' => $this->faker->text(10)
        ];
    }
}
