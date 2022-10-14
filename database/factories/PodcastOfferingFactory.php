<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\PodcastOffering;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PodcastOffering>
 */
class PodcastOfferingFactory extends Factory
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
