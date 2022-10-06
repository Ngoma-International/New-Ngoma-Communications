<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Backend\Users\Repository\UsersRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UpdateUserRequest;
use App\Http\Requests\Backend\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class UsersBackendController extends Controller
{
    public function __construct(
        protected readonly UsersRepository $repository
    ){}

    public function index(): Renderable
    {
        $users = $this->repository->getElements();

        return view('backend.domain.facilitator.index', compact('users'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.facilitator.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $this->repository->store($request);

        return redirect()->route('admins.users.index');
    }

    public function edit(User $user): Renderable
    {
        return view('backend.domain.facilitator.edit', compact('user'));
    }

    public function update(User $user, UpdateUserRequest $request): RedirectResponse
    {
        $this->repository->update($user, $request);

        return redirect()->route('admins.users.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->repository->delete($user);

        return back();
    }
}
