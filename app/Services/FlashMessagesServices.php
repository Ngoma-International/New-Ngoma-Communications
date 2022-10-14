<?php

declare(strict_types=1);

namespace App\Services;

use RealRashid\SweetAlert\Facades\Alert;

class FlashMessagesServices
{
    public function __construct(public Alert $factory)
    {
    }

    public function success($type, $messages): void
    {
        $this->factory::success($type, $messages);
    }

    public function danger($type, $messages): void
    {
        $this->factory::error($type, $messages);
    }

    public function info($type, $messages): void
    {
        $this->factory::info($type, $messages);
    }
}
