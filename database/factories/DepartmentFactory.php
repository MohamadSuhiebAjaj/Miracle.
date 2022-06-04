<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = collect(['00.png', '3.jpg', 'baby.jpg']);
        return [
            'name_ar' => $this->faker->name(),
            'name_en' => $this->faker->name(),
            'photo_g' => $types->random()
        ];
    }
}
