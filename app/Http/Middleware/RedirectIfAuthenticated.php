<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role_id == RoleEnum::Role_Admin) {
                return redirect()->route('admins.backend.index');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == RoleEnum::Role_Facilitators) {
                return redirect()->route('manager.dashboard.index');
            } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == RoleEnum::Role_Advisor) {
                return redirect()->route('admin.dashboard.index');
            }
        }

        return $next($request);
    }
}
