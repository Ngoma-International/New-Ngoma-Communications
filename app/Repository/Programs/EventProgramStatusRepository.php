<?php

declare(strict_types=1);

namespace App\Repository\Programs;

use App\Http\Requests\EventProgramStatusRequest;
use App\Models\EventProgram;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class EventProgramStatusRepository
{
    public function handle(EventProgramStatusRequest $request): Model|EventProgram|Builder|null
    {
        $room = EventProgram::query()
            ->where('id', '=', $request->input('member'))
            ->first();
        $room->update(['status' => $request->input('status')]);
        return $room;
    }
}
