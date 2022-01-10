<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RekeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_bank' => 'BCA',
            'no_rekening' => $this->faker->creditCardNumber(),
            'atas_nama' => $this->faker->name()
        ];
    }
}
