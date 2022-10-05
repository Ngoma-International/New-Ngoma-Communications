<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Users\Repository;

use App\Events\AdminEvent;
use App\Events\AdminUpdateEvent;
use App\Events\AdvisorEvent;
use App\Models\Advisor;
use App\Models\Facilitator;
use App\Models\User;
use App\Traits\ImagesUploadsTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

final class UsersRepository
{
    use ImagesUploadsTrait;

    public function getElements(): Collection|array
    {
        return User::query()
            ->orderByDesc('created_at')
            ->get();
    }

    public function store($attributes): Model|Builder
    {
        $partners = match((int)$attributes->input('role'))  {
            2 => $this->storeAdvisors($attributes),
            3 => $this->storeFacilitator($attributes),
            1 => $this->storeAdmin($attributes),
            'default' => throw new \Exception('')
        };
        session()->flash('success', 'New admin as added');
        return $partners;
    }

    public function show(Model $model)
    {
        return User::query()
            ->find($model)
            ->first();
    }

    public function update(Model $model, $attributes)
    {
        $user = $this->show($model);
        $user->images !== null ? $this->removePathOfImages($user) : null;
        $user->update([
            'name' => $attributes->input('name'),
            'email' => $attributes->input('email'),
            'images' => self::uploadFiles($attributes),
            'profession' => $attributes->input('profession'),
            'phone_number' => $attributes->input('phone_number'),
            'about' => $attributes->input('about'),
            'role_id' => $attributes->input('role'),
        ]);
        session()->flash('success', 'User updated with successfuly');
        AdminUpdateEvent::dispatch($user);
        return $user;
    }

    public function delete(Model $model)
    {
        $user = $this->show($model);
        $user->delete();
        session()->flash('success', 'User updated with successfuly');
        return $user;
    }

    private function storeAdmin($attributes): Model|Builder
    {
        $admin = User::query()
            ->create([
                'name' => $attributes->input('name'),
                'email' => $attributes->input('email'),
                'images' => self::uploadFiles($attributes),
                'profession' => $attributes->input('profession'),
                'phone_number' => $attributes->input('phone_number'),
                'about' => $attributes->input('about'),
                'role_id' => $attributes->input('role'),
                'status' => 1,
                'password' => Hash::make($attributes->input('profession'))
            ]);
        AdminEvent::dispatch($admin);
        return $admin;
    }

    private function storeAdvisors($attributes): Model|Builder
    {
        $advisor = User::query()
            ->create([
                'name' => $attributes->input('name'),
                'email' => $attributes->input('email'),
                'images' => self::uploadFiles($attributes),
                'profession' => $attributes->input('profession'),
                'phone_number' => $attributes->input('phone_number'),
                'about' => $attributes->input('about'),
                'role_id' => $attributes->input('role'),
                'status' => 1,
                'password' => Hash::make($attributes->input('profession'))
            ]);
        Advisor::query()
            ->create([
                'images' => self::uploadFiles($attributes),
                'description' => $attributes->input('about'),
                'user_id' => $advisor->id
            ]);
        AdvisorEvent::dispatch($advisor);

        return $advisor;
    }

    private function storeFacilitator($attributes): Model|Builder
    {
        $facilitator = User::query()
            ->create([
                'name' => $attributes->input('name'),
                'email' => $attributes->input('email'),
                'images' => self::uploadFiles($attributes),
                'profession' => $attributes->input('profession'),
                'phone_number' => $attributes->input('phone_number'),
                'about' => $attributes->input('about'),
                'role_id' => $attributes->input('role'),
                'status' => 1,
                'password' => Hash::make($attributes->input('profession'))
            ]);
        Facilitator::query()
            ->create([
                'images' => self::uploadFiles($attributes),
                'description' => $attributes->input('about'),
                'user_id' => $facilitator->id,
            ]);
        AdvisorEvent::dispatch($facilitator);

        return $facilitator;
    }
}
