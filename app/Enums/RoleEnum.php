<?php

declare(strict_types=1);

namespace App\Enums;

enum RoleEnum: string
{
    case Role_Admin = 'admin';

    case Role_Advisor = 'advisor';

    case Role_Facilitators = "facilitator";
}
