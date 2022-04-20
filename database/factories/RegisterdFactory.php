<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registerd>
 */
class RegisterdFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->name(),
            'position'  => $this->faker->word(),
            'side'      => $this->faker->word(),
            'email'     => $this->faker->unique()->safeEmail(),
            'phone'     => $this->faker->phonenumber(),
            'seat_num'  => $this->faker->unique()->randomNumber(3),
        ];
    }
}
