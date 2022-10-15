<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Podcast;
use App\Models\PodcastOffering;
use App\Models\TypePodcast;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_podcast_id' => TypePodcast::factory()->create(),
            'podcast_offering_id' => PodcastOffering::factory()->create(),
            'user_id' =>  User::factory()->create(),
            'title' => $this->faker->name,
            'thumbnail' => $this->faker->image,
            'images_video' => $this->faker->image
        ];
    }
}
