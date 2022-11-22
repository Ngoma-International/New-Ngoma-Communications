<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\ViewModels\Frontend\HomeViewModel;
use App\ViewModels\Frontend\SeminarViewModel;
use Illuminate\Contracts\Support\Renderable;

class HomeFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new HomeViewModel();
        $seminarsViewModel = new SeminarViewModel();

        return view('app.home', compact('viewModel', 'seminarsViewModel'));
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
