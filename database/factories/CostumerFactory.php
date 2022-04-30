<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costumer>
 */
class CostumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Not a valid cpf but it doesn't matter for the test
        return [
            'name' => $this->faker->name,
            'cpf' => $this->faker->numerify('###########'),
        ];
    }
}
