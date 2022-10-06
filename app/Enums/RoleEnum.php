<?php

declare(strict_types=1);

namespace App\Enums;

enum RoleEnum: int
{
    case Role_Admin = 1;
    case Role_Advisor = 2;
    case Role_Facilitators = 3;
}
