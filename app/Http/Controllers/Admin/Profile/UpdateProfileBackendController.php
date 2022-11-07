<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Backend\Profile\UpdateProfileRequest;
use App\Models\User;
use App\Repository\Profile\UpdateProfileRepository;
use App\Services\FlashMessagesServices;
use App\ViewModels\Profile\ProfileUser;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UpdateProfileBackendController extends BaseController
{
    public function __construct(
        protected UpdateProfileRepository $repository,
        public FlashMessagesServices $services
    ) {
        parent::__construct($this->services);
    }

    public function __invoke(): Factory|View|Application
    {
        $viewModel = new ProfileUser(auth()->user());

        return view('admin.domain.profile.edit', compact('viewModel'));
    }

    public function update(User $user, UpdateProfileRequest $request): RedirectResponse
    {
        $user = $this->repository->updateUser($request, $user);

        $this->services->success(
            'success',
            'Votre mise a jours e ete effectuer avec success'
        );

        return to_route('admins.profile.index');
    }
}
