<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition(): array
    {
        return [
            'user_id' => 1, // ← JUST USE 1 DIRECTLY
            'name' => $this->faker->word(),
            'qty' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 500),
            'description' => $this->faker->sentence(),
        ];
    }
}