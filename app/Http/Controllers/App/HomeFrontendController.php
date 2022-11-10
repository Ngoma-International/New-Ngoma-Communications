<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\ViewModels\Frontend\HomeViewModel;
use Illuminate\Contracts\Support\Renderable;

class HomeFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new HomeViewModel();

        return view('frontend.home', compact('viewModel'));
    }

    public function about(): Renderable
    {
        $teams = User::query()
            ->where('status', '=', true)
            ->get();
        return view('frontend.domain.about.index', compact('teams'));
    }
}
