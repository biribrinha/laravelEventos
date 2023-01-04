<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->firstName(),
            'sobrenome' => fake()->lastName(),
            'nascimento' => fake()->dateTimeBetween('-50 year', '-18 year'),
            'sexo' => fake()->randomElement(['M', 'F']),
            'pai' => fake()->name('male'),
            'mae' => fake()->name('female')
        ];
    }
}
