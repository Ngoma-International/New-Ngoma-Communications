<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Profile\UpdateProfileRequest;
use App\Models\User;
use App\Repository\Profile\UpdateProfileRepository;
use App\Services\FlashMessagesServices;
use App\ViewModels\Profile\ProfileUser;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ProfileBackendController extends BaseController
{
    public function __construct(
        protected UpdateProfileRepository $repository,
        public FlashMessagesServices $services
    ) {
        parent::__construct($this->services);
    }

    public function __invoke(): Renderable
    {
        $viewModel = new ProfileUser(auth()->user());

        return view('backend.domain.profile.index', compact('viewModel'));
    }

    public function update(User $user, UpdateProfileRequest $request): RedirectResponse
    {
        $user = $this->repository->updateUser($request, $user);

        $this->services->success(
            'success',
            'Votre mise a jours e ete effectuer avec success'
        );

        return back();
    }
}
