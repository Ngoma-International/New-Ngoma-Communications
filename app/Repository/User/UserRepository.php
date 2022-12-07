<?php

declare(strict_types=1);

namespace App\Repository\User;

use App\Events\AdminEvent;
use App\Events\AdminUpdateEvent;
use App\Models\ProfileUser;
use App\Models\TemporaryImage;
use App\Models\User;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    use HasImagesUploads;

    public function getElements(): Collection
    {
        return User::query()
            ->orderByDesc('created_at')
            ->get();
    }

    public function store($attributes): Model
    {
        $partners = $this->storeFacilitator($attributes);
        $this->createProfile($partners);
        return $partners;
    }

    public function show(Model $model)
    {
        return User::query()
            ->find($model)
            ->first();
    }

    public function update(Model $model, $attributes): Model
    {
        /**@var User $model  */
        $model->images !== null ? $this->removePathOfImages($model) : null;
        $manage = $attributes->validated();
        $manage['images'] = $this->getProfileImages()->images;
        $manage['firstname'] = $attributes->input("firstname");
        $manage['role_id'] = $attributes->input('role');
        $manage['password'] = Hash::make($attributes->input('password'));
        $model->update($manage);
        AdminUpdateEvent::dispatch($model);
        return $model;
    }

    public function delete(Model $model): Model
    {
        /**@var User $model  */
        $model->images !== null ? $this->removePathOfImages($model) : null;
        $model->delete();
        return $model;
    }

    private function storeFacilitator($attributes): Model
    {
        $manager = $attributes->validated();
        $manager['images'] = $this->getProfileImages()->images;
        $manager['firstname'] = $attributes->input("firstname");
        $manager['role_id'] = $attributes->input('role');
        $manager['status'] = 1;
        $manager['password'] = Hash::make($attributes->input('password'));
        $admin = User::query()
            ->create($manager);
        AdminEvent::dispatch($admin);
        $this->getProfileImages()->delete();
        return $admin;
    }

    private function createProfile(Model $partners): void
    {
        ProfileUser::query()
            ->create([
                'user_id' => $partners->id
            ]);
    }

    private function getProfileImages(): Model|Builder|TemporaryImage|null
    {
        return TemporaryImage::query()
            ->where('user_id', '=', auth()->id())
            ->first();
    }
}
