<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use App\ViewModels\Frontend\HomeViewModel;
use App\ViewModels\Frontend\SeminarViewModel;
use App\ViewModels\Frontend\ShowSeminarFrontend;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SeminarFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new SeminarViewModel();

        return  view('app.domain.seminar.index', compact('viewModel'));
    }

    public function show(Seminar $seminar): Factory|View|Application
    {
        $viewModel = new ShowSeminarFrontend($seminar);

        return view('app.domain.seminar.show', compact('viewModel'));
    }
}
