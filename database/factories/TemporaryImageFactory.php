<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TemporaryImage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TemporaryImage>
 */
class TemporaryImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'images' => $this->faker->image,
            'user_id' => User::factory()->create()
        ];
    }
}
