<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\ProductSize;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSizeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductSize::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'size' => $this->faker->numberBetween($min = 1, $max = 4) . 'x' . $this->faker->numberBetween($min = 4, $max = 7)
        ];
    }
}
