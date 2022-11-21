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

        return view('app.home', compact('viewModel'));
    }

    public function about(): Renderable
    {
        return view('app.domain.about.index');
    }

    public function leading(): Renderable
    {
        return view('app.domain.about.leading');
    }

    public function organisation(): Renderable
    {
        return view('app.domain.about.organisation');
    }

    public function people(): Renderable
    {
        return view('app.domain.about.peopleLeading');
    }
}
