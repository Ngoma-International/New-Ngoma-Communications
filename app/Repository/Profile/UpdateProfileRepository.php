<?php

declare(strict_types=1);

namespace App\Repository\Profile;

use App\Http\Requests\Backend\Profile\UpdateProfileRequest;
use App\Models\ProfileUser;
use App\Models\TemporaryImage;
use App\Models\User;
use App\Traits\ImagesUploadsTrait;
use Illuminate\Database\Eloquent\Model;

class UpdateProfileRepository
{
    use ImagesUploadsTrait;

    public function updateUser(UpdateProfileRequest $request, User $user): User
    {
        $profile = $this->getProfileUser($user);
        /**@var TemporaryImage|Model $temporary */
        $temporary = $this->getTemporaryImages($user);
        $profile !== null ? $this->updateProfile($request, $user) : $this->createProfile($user, $request);

        if ($user->images !== null) {
            $this->removePathOfImages($user);
        }
        if ($temporary) {
            $user->update([
                'name' => $request->input('name'),
                'firstname' => $request->input('firstname'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'description' => $request->input('description'),
                'images' => $temporary->images
            ]);
            $temporary->delete();
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
        $profile->update([
            'birthdays' => $request->input('birthdays'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'town' => $request->input('town'),
            'enterprise' => $request->input('enterprise'),
            'role_enterprise' => $request->input('role_enterprise'),
            'department' => $request->input('department'),
            'sector' => $request->input('sector'),
        ]);
        return $profile;
    }

    private function createProfile(User $user, UpdateProfileRequest $request): Model
    {
        $profile = $request->all();
        $profile['user_id'] = $user->id;
        return ProfileUser::query()
            ->create($profile);
    }

    private function getTemporaryImages(User $user): Model|null
    {
        return TemporaryImage::query()
            ->where('user_id', '=', $user->id)
            ->first();
    }
}
