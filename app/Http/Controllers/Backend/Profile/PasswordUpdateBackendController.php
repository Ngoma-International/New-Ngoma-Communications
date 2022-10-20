<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;

class PasswordUpdateBackendController extends Controller
{
    public function __invoke()
    {
        return view('backend.domain.security.index');
    }
}
