<?php

declare(strict_types=1);

namespace App\Repository\Seminar;

use App\Http\Requests\Backend\Seminar\SeminarStatusRequest;
use App\Models\Seminar;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SeminarStatusRepository
{
    public function handle(SeminarStatusRequest $request): Model|Builder|Seminar|null
    {
        $room = Seminar::query()
            ->where('id', '=', $request->input('seminar'))
            ->first();
        $room->update(['status' => $request->input('status')]);
        return $room;
    }
}
