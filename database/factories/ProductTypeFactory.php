<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = collect(['acc.jpg', 'dress.png', 'pants.png', 'skirt.png']);

        return [
            'name_ar' => $this->faker->name(),
            'name_en' => $this->faker->name(),
            'photo' => $types->random()
        ];
    }
}
