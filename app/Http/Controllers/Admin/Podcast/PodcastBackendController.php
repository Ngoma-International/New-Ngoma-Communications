<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Podcast;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Backend\Podcast\StorePodcastRequest;
use App\Http\Requests\Backend\Podcast\UpdatePodcastRequest;
use App\Models\Podcast;
use App\Repository\Podcast\PodcastBackendRepository;
use App\Services\FlashMessagesServices;
use App\ViewModels\Podcast\CreatePodcast;
use App\ViewModels\Podcast\EditePodcast;
use App\ViewModels\Podcast\ShowPodcast;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PodcastBackendController extends BaseController
{
    public function __construct(
        protected readonly PodcastBackendRepository $backendRepository,
        public FlashMessagesServices $services
    ) {
        parent::__construct($this->services);
    }

    public function index(): Renderable
    {
        $podcasts = $this->backendRepository->getPodcasts();

        return view('admin.domain.podcasts.index', compact('podcasts'));
    }

    public function create(): Factory|View|Application
    {
        $viewModels = new CreatePodcast();

        return view('admin.domain.podcasts.create', compact('viewModels'));
    }

    public function store(StorePodcastRequest $request): RedirectResponse
    {
        $podcast = $this->backendRepository->store($request);

        $this->services->success(
            'success',
            "Un nouveau podcast a ete ajouter avec success"
        );

        return redirect()->route('admins.podcasts.index');
    }

    public function show(Podcast $podcast): Factory|View|Application
    {
        $postViewModel = new ShowPodcast($podcast);
        
        return view('admin.domain.podcasts.show', compact('postViewModel'));
    }

    public function edit(Podcast $podcast): Factory|View|Application
    {
        $viewModels = new EditePodcast($podcast);

        return view('admin.domain.podcasts.edit', compact('viewModels'));
    }

    public function update(Podcast $podcast, UpdatePodcastRequest $request): RedirectResponse
    {
        $podcast = $this->backendRepository->update($podcast, $request);

        $this->services->success(
            'success',
            "Le podcast $podcast->id a ete mise a jours"
        );

        return redirect()->route('admins.podcasts.index');
    }

    public function destroy(Podcast $podcast): RedirectResponse
    {
        $this->backendRepository->delete($podcast);

        $this->services->success(
            'success',
            "Le podcast $podcast->id a ete supprimer"
        );

        return redirect()->route('admins.podcasts.index');
    }
}
