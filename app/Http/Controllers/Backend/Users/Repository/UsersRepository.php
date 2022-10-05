<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Users\Repository;

use App\Enums\RoleEnum;
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
use function PHPUnit\Framework\at;

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
        $role  = $attributes->input('role');
        if ($role == RoleEnum::Role_Advisor) {
            $partners = $this->storeAdvisors($attributes);
            session()->flash('success', 'New advisor as added');
        } elseif ($role === RoleEnum::Role_Facilitators) {
            $partners = $this->storeFacilitator($attributes);
            session()->flash('success', 'New facilitator as added');
        } else {
            $partners = $this->storeAdmin($attributes);
            session()->flash('success', 'New admin as added');
        }
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
        $this->removePathOfImages($user);
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
                'users' => $advisor->id
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
                'users' => $facilitator->id
            ]);
        AdvisorEvent::dispatch($facilitator);

        return $facilitator;
    }
}
