<?php

declare(strict_types=1);

namespace App\Services;

use RealRashid\SweetAlert\ToSweetAlert;

class FlashMessagesServices
{
    public function __construct(protected ToSweetAlert $sweetAlert)
    {
    }
}
