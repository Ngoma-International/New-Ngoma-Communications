<?php

declare(strict_types=1);

namespace App\Enums;

enum EventEnum: int
{
    case PENDING = 0;
    case CONFIRMED = 1;
}
