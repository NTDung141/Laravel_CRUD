<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(Faker $faker)
    {
        return [
            'id' => $faker->sentences(3)
            'name' => $faker->sentences(3),
            'description' => $faker->paragraph(4),
            'complete' => false
        ];
    }
}
