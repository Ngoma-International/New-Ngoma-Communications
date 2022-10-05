<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Podcast;

use App\Http\Controllers\Backend\Podcast\Repository\PodcastRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StorePodcastRequest;
use App\Http\Requests\Backend\UpdatePodcastRequest;
use App\Models\Podcast;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PodcastBackendController extends Controller
{
    public function __construct(
        protected readonly PodcastRepository $repository
    ){}

    public function index(): Factory|View|Application
    {
        $podcasts = $this->repository->getElements();

        return view('backend.domain.podcast.index', compact('podcasts'));
    }

    public function create(): Factory|View|Application
    {
        return view('backend.domain.podcast.create');
    }

    public function store(StorePodcastRequest $request): RedirectResponse
    {
        $this->repository->store($request);

        return redirect()->route('admins.podcast.index');
    }

    public function show(Podcast $podcast): View|Factory|Application
    {
        return \view('backend.domain.podcast.show', compact('podcast'));
    }

    public function edit(Podcast $podcast): View|Factory|Application
    {
        return \view('backend.domain.podcast.edit', compact('podcast'));
    }

    public function update(Podcast $podcast, UpdatePodcastRequest $request): RedirectResponse
    {
        $this->repository->update($podcast, $request);

        return redirect()->route('admins.podcast.index');
    }

    public function destroy(Podcast $podcast): RedirectResponse
    {
        $this->repository->delete($podcast);

        return back();
    }
}
