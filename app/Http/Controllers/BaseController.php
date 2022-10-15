<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\FlashMessagesServices;

class BaseController extends Controller
{
    public function __construct(
        public FlashMessagesServices $services
    ) {
    }
}
