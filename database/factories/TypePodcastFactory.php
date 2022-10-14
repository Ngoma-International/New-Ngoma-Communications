<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TypePodcast;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TypePodcast>
 */
class TypePodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name
        ];
    }
}
