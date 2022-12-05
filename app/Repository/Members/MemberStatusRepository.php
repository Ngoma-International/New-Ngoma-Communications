<?php

declare(strict_types=1);

namespace App\Repository\Members;

use App\Http\Requests\MemberStatusRequest;
use App\Models\Member;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MemberStatusRepository
{
    public function handle(MemberStatusRequest $request): Model|Builder|Member|null
    {
        $room = Member::query()
            ->where('id', '=', $request->input('user'))
            ->first();
        $room->update(['status' => $request->input('status')]);
        return $room;
    }
}
