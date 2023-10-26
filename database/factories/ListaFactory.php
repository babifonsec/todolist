<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'            => $this->faker->words(3, true),
            'descricao'         => $this->faker->sentence(),
            'id_user'        => $this->faker->numberBetween(1, 10),

        ];
    }
}
