<?php

declare(strict_types=1);

namespace App\Repository\Securities;

use App\Http\Requests\Backend\Security\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordRepository
{
    public function updatePassword(UpdatePasswordRequest $setValidator, User $user, $service): bool|int|RedirectResponse
    {
        if (!Hash::check($setValidator->input('old_password'), $user->password)) {
            $service->error(
                'danger',
                "Le mot de passe ne correspond pas avec l'ancien"
            );
        }

        return User::whereId($user->id)->update([
            'password' => Hash::make($setValidator->input('password'))
        ]);
    }
}
