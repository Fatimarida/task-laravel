<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween($min = 1, $max = 6),
            'name' => $this->faker->words(5, true),
            'rent' => $this->faker->randomNumber(3),
            'refundable_deposit' => $this->faker->randomNumber(3),
            'image_path' => $this->faker->imageUrl(),
//            'tagline' => $this->faker->catchPhrase
        ];
    }
}
