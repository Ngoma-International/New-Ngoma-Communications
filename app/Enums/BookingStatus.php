<?php

declare(strict_types=1);

namespace App\Enums;

enum BookingStatus: int
{
    case Booking_confirmed = 1;
    case Booking_pending = 0;
}
