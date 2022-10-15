<?php

declare(strict_types=1);

namespace App\Enums;

enum SeminarEnum: int
{
    case SEMINAR_PENDING = 0;
    case SEMINAR_CONFIRMED = 1;
}
