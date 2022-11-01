<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;
use App\ViewModels\Profile\ProfileUser;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProfileBackendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new ProfileUser(auth()->user());

        return view('backend.domain.profile.index', compact('viewModel'));
    }

    public function security(): Factory|View|Application
    {
        return view('backend.domain.profile.security');
    }

    public function cursus(): Factory|View|Application
    {
        return view('backend.domain.profile.cursus');
    }
}
