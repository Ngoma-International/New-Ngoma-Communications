<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\ViewModels\Frontend\HomeViewModel;
use Illuminate\Contracts\Support\Renderable;

class HomeFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new HomeViewModel();

        return view('frontend.home', compact('viewModel'));
    }
}
