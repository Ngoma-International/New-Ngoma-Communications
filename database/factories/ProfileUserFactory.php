<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ProfileUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProfileUser>
 */
class ProfileUserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(),
            'birthdays' => $this->faker->date,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'town' => $this->faker->city,
            'enterprise' => $this->faker->company,
            'role_enterprise' => $this->faker->company,
            'department' => $this->faker->address,
            'sector' => $this->faker->sentence
        ];
    }
}
