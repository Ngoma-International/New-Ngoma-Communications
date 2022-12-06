<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StoreFacilitatorRequest;
use App\Http\Requests\Backend\UpdateFacilitatorRequest;
use App\Models\Facilitator;
use App\Repository\Members\FacilitatorRepository;
use App\Services\FlashMessagesServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class FacilitatorController extends Controller
{
    public function __construct(
        protected FacilitatorRepository $repository,
        protected FlashMessagesServices $flashMessagesServices
    ) {
    }

    public function index(): Renderable
    {
        $facilitators = $this->repository->getFacilitators();

        return  view('admin.domain.facilitator.index', compact('facilitators'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.domain.facilitator.create');
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function store(StoreFacilitatorRequest $request): RedirectResponse
    {
        $this->repository->store($request);

        $this->flashMessagesServices->success('success', "Animateur ajouter avec success");

        return redirect()->route('admins.facilitator.index');
    }

    public function show(Facilitator $facilitator): View|Factory|Application
    {
        return \view('admin.domain.facilitator.show', compact('facilitator'));
    }

    public function edit(Facilitator $facilitator): View|Factory|Application
    {
        return \view('admin.domain.facilitator.edit', compact('facilitator'));
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function update(UpdateFacilitatorRequest $request, Facilitator $facilitator): RedirectResponse
    {
        $this->repository->update($request, $facilitator);

        $this->flashMessagesServices->success('success', "Animateur modifier avec success");

        return redirect()->route('admins.facilitator.index');

    }

    public function destroy(Facilitator $facilitator): RedirectResponse
    {
        $this->repository->delete($facilitator);

        $this->flashMessagesServices->success('success', "Animateur supprimer avec success");

        return redirect()->route('admins.facilitator.index');
    }
}
