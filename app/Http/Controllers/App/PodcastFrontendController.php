<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\ViewModels\Frontend\PodcastViewModel;
use Illuminate\Contracts\Support\Renderable;

class PodcastFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new PodcastViewModel();

        return view('frontend.domain.podcast.index', compact('viewModel'));
    }
}
