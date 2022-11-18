<?php

declare(strict_types=1);

namespace App\Repository\Booking;

use App\Enums\BookingStatus;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class StoreBookingRepository
{
    public function store(array $validation, $seminar): Booking|Model|Builder
    {
        return Booking::query()
            ->create(array_merge($validation, [
                'status' => BookingStatus::Booking_pending,
                'seminar_id' => $seminar,
                'transaction_code' => 0
            ]));
    }
}
