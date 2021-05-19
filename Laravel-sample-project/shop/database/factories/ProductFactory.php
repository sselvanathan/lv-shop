<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->text(20),
            'price' => $this->faker->randomDigitNotZero(),
            'category_id' => Category::factory()->create()->id,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => now(),
            'description' => $this->faker->realText(100),
            'photo' => '',
        ];
    }

//    /**
//     * Indicate that the model's email address should be unverified.
//     *
//     * @return \Illuminate\Database\Eloquent\Factories\Factory
//     */
//    public function unverified()
//    {
//        return $this->state(function (array $attributes) {
//            return [
//                'photo' => $this->faker->file(),
//            ];
//        });
//    }
}
