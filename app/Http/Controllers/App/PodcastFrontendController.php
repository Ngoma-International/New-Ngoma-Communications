<?php

declare(strict_types=1);

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\ViewModels\Frontend\PodcastViewModel;
use App\ViewModels\ShowPodcastFrontend;
use Illuminate\Contracts\Support\Renderable;

class PodcastFrontendController extends Controller
{
    public function __invoke(): Renderable
    {
        $viewModel = new PodcastViewModel();

        return view('frontend.domain.podcast.index', compact('viewModel'));
    }

    public function show(Podcast $podcast): Renderable
    {
        $viewModel = new ShowPodcastFrontend($podcast);

        return view('frontend.domain.podcast.show', compact('viewModel'));
    }
}
