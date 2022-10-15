<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use App\Models\Seminar;
use App\Models\SeminaryType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Seminar>
 */
class SeminarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory()->create(),
            'seminary_type_id' => SeminaryType::factory()->create(),
            'user_id' => User::factory()->create(),
            'name' => $this->faker->name,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'prices' => $this->faker->numberBetween(100, 800),
            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'date' => $this->faker->date,
            'duration' => $this->faker->numberBetween(10, 60),
            'address_seminar' => $this->faker->address,
            'attend' => $this->faker->text,
            'overview' => $this->faker->name,
            'images' => $this->faker->image,
            'description' => $this->faker->text
        ];
    }
}
