<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'            => $this->faker->words(3, true),
            'descricao'         => $this->faker->sentence(),
            'dataCriacao'   => $this->faker->dateTime(),
            'dataConclusao'      => $this->faker->dateTime(),
            'status' => $this->faker->randomElement([true, false]),
            'id_lista'        => $this->faker->numberBetween(1, 10),

        ];
    }
}
