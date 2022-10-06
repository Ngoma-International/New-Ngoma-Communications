<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RoleEnum;
use Illuminate\Support\Facades\Auth;

trait RedirectRoute
{
    public function redirectTo(): string
    {
        switch(Auth::user()->role_id) {
            case RoleEnum::Role_Admin:
                $this->redirectTo = route('admin.dashboard.index');
                return $this->redirectTo;
                break;
            case RoleEnum::Role_Advisor:
                $this->redirectTo = route('manager.dashboard.index');
                return $this->redirectTo;
                break;
            case RoleEnum::Role_Facilitators:
                $this->redirectTo = route('home.index');
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = route('login');
                return $this->redirectTo;
        }
    }
}
