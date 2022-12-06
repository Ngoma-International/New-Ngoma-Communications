<?php

declare(strict_types=1);

namespace App\Repository\Members;

use App\Http\Requests\FacilitatorStatusRequest;
use App\Models\Facilitator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FacilitatorStatusRepository
{
    public function handle(FacilitatorStatusRequest $request): Model|Facilitator|Builder|null
    {
        $room = Facilitator::query()
            ->where('id', '=', $request->input('facilitator'))
            ->first();
        $room->update(['status' => $request->input('status')]);
        return $room;
    }
}
