<?php

declare(strict_types=1);

namespace App\Repository\Booking;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Collection;

class BookingBackendRepository
{
    public function bookings(): Collection|array
    {
        return Booking::query()
            ->with('seminar')
            ->orderByDesc('created_at')
            ->get();
    }

    public function destroy(Booking $booking)
    {
    }
}
