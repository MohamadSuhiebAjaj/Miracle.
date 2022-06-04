<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => random_int(8000, 100000),
            'price_sell' => random_int(0, 7000),
            'description_ar' =>  $this->faker->paragraph(2),
            'description_en' => $this->faker->paragraph(2),
            'photo' =>  random_int(1, 10) . '.jpg'
        ];
    }
}
