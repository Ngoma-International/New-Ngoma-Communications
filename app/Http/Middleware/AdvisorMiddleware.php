<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvisorMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == RoleEnum::Role_Advisor) {
            return $next($request);
        }

        if (Auth::user()->role_id == RoleEnum::Role_Facilitators) {
            return redirect()->route('users.backend.index');
        }

        if (\auth()->user()->role_id === RoleEnum::Role_Admin) {
            return redirect()->route('admin.dashboard.index');
        }
    }
}
