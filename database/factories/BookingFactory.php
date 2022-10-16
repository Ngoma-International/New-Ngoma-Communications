<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Booking>
 */
class BookingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory()->create(),
            'username' => $this->faker->userName,
            'firstname' => $this->faker->firstName,
            'country' => $this->faker->country,
            'email' => $this->faker->email,
            'phone_number' => $this->faker->phoneNumber,
            'status' => $this->faker->boolean,
            'booking_at' => $this->faker->date,
            'transaction_code' => $this->faker->numberBetween(100_000_000, 999_999_999),
            'ticket_number' => $this->faker->numberBetween(1, 3)
        ];
    }
}
