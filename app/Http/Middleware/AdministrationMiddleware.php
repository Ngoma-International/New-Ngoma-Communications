<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == RoleEnum::Role_Advisor) {
            return redirect()->route('home.index');
        }

        if (Auth::user()->role_id == RoleEnum::Role_Facilitators) {
            return redirect()->route('manager.dashboard.index');
        }

        return $next($request);
    }
}