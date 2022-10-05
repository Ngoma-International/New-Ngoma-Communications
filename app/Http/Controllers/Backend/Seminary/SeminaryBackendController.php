<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Seminary;

use App\Http\Controllers\Backend\Seminary\Repository\SeminaryRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SeminaryRequest;
use App\Http\Requests\Backend\UpdateSeminaryRequest;
use App\Models\Seminary;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class SeminaryBackendController extends Controller
{
    public function __construct(protected readonly SeminaryRepository $repository){}

    public function index(): Renderable
    {
        $seminaries = $this->repository->getElements();

        return  view('backend.domain.seminary.index', compact('seminaries'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.seminary.create');
    }

    public function store(SeminaryRequest $request): Redirector|Application|RedirectResponse
    {
        $this->repository->store($request);

        return redirect(route('admins.seminary.index'));
    }

    public function show(Seminary $seminary): Factory|View|Application
    {
        return view('backend.domain.seminary.show', compact('seminary'));
    }

    public function edit(Seminary $seminary): Factory|View|Application
    {
        return view('backend.domain.seminary.edit', compact('seminary'));
    }

    public function update(Seminary $seminary, UpdateSeminaryRequest $request): Redirector|Application|RedirectResponse
    {
        $this->repository->update($seminary, $request);

        return redirect(route('admins.seminary.index'));
    }

    public function destroy(Seminary $seminary): RedirectResponse
    {
        $this->repository->delete($seminary);

        return back();
    }
}
