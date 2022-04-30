<?php

namespace Database\Factories;

use App\Models\Costumer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'costumer_id' => Costumer::factory(),
            'product_id' => Product::factory(),
            'amount' => 2,
            'unit_price' => 120,
            'total_price' => 240
        ];
    }
}
