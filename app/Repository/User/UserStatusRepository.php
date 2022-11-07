<?php

declare(strict_types=1);

namespace App\Repository\User;

use App\Http\Requests\Backend\UserStatusRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserStatusRepository
{
    public function handle(UserStatusRequest $request): Model|Builder|User|null
    {
        $room = User::query()
            ->where('id', '=', $request->input('user'))
            ->first();
        $room->update(['status' => $request->input('status')]);
        return $room;
    }
}
