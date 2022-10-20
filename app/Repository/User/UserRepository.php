<?php

declare(strict_types=1);

namespace App\Repository\User;

use App\Events\AdminEvent;
use App\Events\AdminUpdateEvent;
use App\Models\ProfileUser;
use App\Models\User;
use App\Traits\ImagesUploadsTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    use ImagesUploadsTrait;

    /**
     * @return Collection
     */
    public function getElements(): Collection
    {
        return User::query()
            ->select([
                'id',
                'name',
                'firstname',
                'email',
                'phone_number',
                'images',
                'role_id'
            ])
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
        $model->images !== null ? $this->removePathOfImages($model) : "";
        $manage = $attributes->all();
        $manage['images'] = self::uploadFiles($attributes);
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
        $model->images !== null ? $this->removePathOfImages($model) : "";
        $model->delete();
        return $model;
    }

    private function storeFacilitator($attributes): Model
    {
        $manager = $attributes->all();
        $manager['images'] = self::uploadFiles($attributes);
        $manager['firstname'] = $attributes->input("firstname");
        $manager['role_id'] = $attributes->input('role');
        $manager['status'] = 1;
        $manager['password'] = Hash::make($attributes->input('password'));
        $admin = User::query()
            ->create($manager);
        AdminEvent::dispatch($admin);
        return $admin;
    }

    private function createProfile(Model $partners): void
    {
        ProfileUser::query()
            ->create([
                'user_id' => $partners->id
            ]);
    }
}
