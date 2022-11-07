<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Seminar;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Backend\Seminar\StoreSeminarRequest;
use App\Http\Requests\Backend\Seminar\UpdateSeminarRequest;
use App\Models\Seminar;
use App\Repository\Seminar\SeminarRepository;
use App\Services\FlashMessagesServices;
use App\ViewModels\Seminar\CreateSeminar;
use App\ViewModels\Seminar\EditSeminar;
use App\ViewModels\Seminar\ShowSeminar;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class SeminarBackendController extends BaseController
{
    public function __construct(
        FlashMessagesServices $services,
        protected readonly SeminarRepository $repository
    ) {
        parent::__construct($services);
    }

    public function index(): Renderable
    {
        $seminars = $this->repository->getSeminars();

        return view('admin.domain.seminar.index', compact('seminars'));
    }

    public function create(): Factory|View|Application
    {
        $viewModels = new CreateSeminar();

        return view('admin.domain.seminar.create', compact('viewModels'));
    }

    public function store(StoreSeminarRequest $request): RedirectResponse
    {
        $this->repository->create($request);

        $this->services->success(
            'success',
            "Operation effectuez avec success"
        );

        return redirect()->route('admins.seminar.index');
    }

    public function show(Seminar $seminar): Factory|View|Application
    {
        $viewModels = new ShowSeminar($seminar);

        return view('admin.domain.seminar.show', compact('viewModels'));
    }

    public function edit(Seminar $seminar): Factory|View|Application
    {
        $viewModels = new EditSeminar($seminar);

        return view('admin.domain.seminar.edit', compact('viewModels'));
    }

    public function update(UpdateSeminarRequest $request, Seminar $seminar): RedirectResponse
    {
        $seminar = $this->repository->update($request, $seminar);

        $this->services->success(
            'success',
            "Operation effectuez avec success #{$seminar->name}"
        );

        return redirect()->route('admins.seminar.index');
    }

    public function destroy(Seminar $seminar): RedirectResponse
    {
        $seminar = $this->repository->delete($seminar);

        $this->services->success(
            'success',
            "Operation effectuez avec success #{$seminar->name}"
        );

        return redirect()->route('admins.seminar.index');
    }
}
