<?php

declare(strict_types=1);

namespace App\Repository\Profile;

use App\Http\Requests\Backend\Profile\UpdateProfileRequest;
use App\Models\ProfileUser;
use App\Models\TemporaryImage;
use App\Models\User;
use App\Traits\HasImagesUploads;
use App\Traits\HasTemporary;
use Illuminate\Database\Eloquent\Model;

final class UpdateProfileRepository
{
    use HasImagesUploads;
    use HasTemporary;

    public function updateUser(UpdateProfileRequest $request, User $user): User
    {
        $profile = $this->getProfileUser($user);
        /**@var TemporaryImage|Model $temporary */
        $temporary = $this->getTemporaryImages($user);
        $profile !== null ? $this->updateProfile($request, $user) : $this->createProfile($user, $request);
        $user->images !== null ? $this->removePathOfImages($user) : null;

        $users  = $request->validated();
        if ($temporary) {
            $users['images'] = $temporary->images;
            $user->update($users);
            $temporary->delete();
        } else {
            $user->update($users);
        }
        return $user;
    }

    private function getProfileUser(User $user): Model|null
    {
        return ProfileUser::query()
            ->where('user_id', '=', $user->id)
            ->first();
    }

    private function updateProfile(UpdateProfileRequest $request, $user): Model|null
    {
        $profile = $this->getProfileUser($user);
        $profile->update($request->validated());
        return $profile;
    }

    private function createProfile(User $user, UpdateProfileRequest $request): Model
    {
        $profile = $request->all();
        $profile['user_id'] = $user->id;
        return ProfileUser::query()
            ->create($profile);
    }
}
