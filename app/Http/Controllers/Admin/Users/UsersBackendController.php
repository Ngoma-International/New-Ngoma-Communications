<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UpdateUserRequest;
use App\Http\Requests\Backend\UserRequest;
use App\Models\User;
use App\Repository\User\UserRepository;
use App\Services\FlashMessagesServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersBackendController extends Controller
{
    public function __construct(
        protected readonly UserRepository $repository,
        protected FlashMessagesServices $flashMessagesServices
    ) {
    }

    public function index(): Renderable
    {
        $users = $this->repository->getElements();

        return view('admin.domain.users.index', compact('users'));
    }

    public function create(): Renderable
    {
        return view('admin.domain.users.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $this->repository->store($request);

        $this->flashMessagesServices->success('success', "Utilisateur enregistrer avec success");

        return redirect()->route('admins.users.index');
    }

    public function show(User $user): Factory|View|Application
    {
        return view('admin.domain.users.show', compact('user'));
    }

    public function edit(User $user): Renderable
    {
        return view('admin.domain.users.edit', compact('user'));
    }

    public function update(User $user, UpdateUserRequest $request): RedirectResponse
    {
        $this->repository->update($user, $request);

        $this->flashMessagesServices->success('success', "L'utilisateur a ete mise a jours");

        return redirect()->route('admins.users.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->repository->delete($user);

        $this->flashMessagesServices->success('success', "L'utilisateur a ete supprimer");

        return redirect()->route('admins.users.index');
    }
}
