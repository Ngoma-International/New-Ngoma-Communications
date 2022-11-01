<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Backend\Security\UpdatePasswordRequest;
use App\Models\User;
use App\Repository\Securities\UpdatePasswordRepository;
use App\Services\FlashMessagesServices;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class PasswordUpdateBackendController extends BaseController
{
    public function __construct(
        protected readonly UpdatePasswordRepository $repository,
        public FlashMessagesServices $services
    ) {
        parent::__construct($this->services);
    }
    public function __invoke(): Renderable
    {
        return view('backend.domain.security.index');
    }

    public function update(UpdatePasswordRequest $request, User $user): RedirectResponse
    {
        $this->repository->updatePassword($request, $user, $this->services);

        $this->services->success(
            'success',
            "Votre mot de passe a ete mise a jours"
        );

        return to_route('admins.profile.index');
    }
}
