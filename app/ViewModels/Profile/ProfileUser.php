<?php

declare(strict_types=1);

namespace App\ViewModels\Profile;

use App\Http\Controllers\Backend\Profile\ProfileBackendController;
use App\Http\Controllers\Backend\Profile\UpdateProfileBackendController;
use App\Models\User;
use App\Models\ProfileUser as Profile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ViewModels\ViewModel;

class ProfileUser extends ViewModel
{
    public string $updateUrl;

    public function __construct(public User $user)
    {
        $this->updateUrl = action([UpdateProfileBackendController::class]);
    }

    public function user(): User
    {
        return $this->user;
    }

    public function profile(): Model|Builder|null
    {
        return Profile::query()
            ->where('user_id', '=', $this->user->id)
            ->first();
    }
}
