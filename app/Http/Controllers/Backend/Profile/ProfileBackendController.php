<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;
use App\ViewModels\Profile\ProfileUser;
use Illuminate\Contracts\Support\Renderable;

class ProfileBackendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new ProfileUser(auth()->user());

        return view('backend.domain.profile.index', compact('viewModel'));
    }

    public function security()
    {
        return view('backend.domain.profile.security');
    }

    public function cursus()
    {
        return view('backend.domain.profile.cursus');
    }
}
