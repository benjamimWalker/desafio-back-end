<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ufs = [
            'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG',
            'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
        ];

        // Some mixed addresses, but it is not a commercial api, so it's all ok
        return [
            'number' => $this->faker->numberBetween(11, 999),
            'street' => $this->faker->streetName,
            'city' => $this->faker->city,
            'state' => $this->faker->randomElement($ufs),
            'country' => $this->faker->country,
            'costumer_id' => Costumer::factory(),
        ];
    }
}
