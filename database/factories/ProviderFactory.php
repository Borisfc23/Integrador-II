<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->company(),
            'encargado'=>$this->faker->name(),
            'ubicacion'=>$this->faker->streetAddress(),
            'telefono'=>$this->faker->phoneNumber(),
        ];
    }
}