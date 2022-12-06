<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\programs;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\EventProgram;
use App\Repository\Programs\ProgramsRepository;
use App\Services\FlashMessagesServices;
use App\ViewModels\CreateProgramsViewModel;
use App\ViewModels\EditEventPrograms;
use App\ViewModels\EventProgramsViewModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class EventProgramsAdminController extends Controller
{
    public function __construct(
        protected readonly ProgramsRepository $repository,
        protected readonly FlashMessagesServices $flashMessagesServices
    ) {
    }

    public function index(): Renderable
    {
        $programs = new EventProgramsViewModel();

        return  view('admin.domain.programs.index', compact('programs'));
    }

    public function create(): Factory|View|Application
    {
        $viewModel = new CreateProgramsViewModel();

        return view('admin.domain.programs.create', compact('viewModel'));
    }

    public function store(StoreProgramRequest $request): RedirectResponse
    {
        $this->repository->store($request);

        $this->flashMessagesServices->success(
            'success',
            "Un programme ajouter a l'evenement"
        );

        return redirect()->route('admins.programs.index');
    }

    public function show(EventProgram $program): View|Factory|Application
    {
        return \view('admin.domain.programs.show', compact('program'));
    }

    public function edit(EventProgram $program): View|Factory|Application
    {
        $viewModel = new EditEventPrograms($program);
        return \view('admin.domain.programs.edit', compact('viewModel'));
    }

    public function update(UpdateProgramRequest $request, EventProgram $program): RedirectResponse
    {
        $this->repository->update($request, $program);

        $this->flashMessagesServices->success(
            'success',
            "Un programme modifier avec success"
        );

        return redirect()->route('admins.programs.index');
    }

    public function destroy(EventProgram $program): RedirectResponse
    {
        $this->repository->delete($program);

        $this->flashMessagesServices->success(
            'success',
            "Un programme supprimer avec success"
        );

        return redirect()->route('admins.programs.index');
    }
}
