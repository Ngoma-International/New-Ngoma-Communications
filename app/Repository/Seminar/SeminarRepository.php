<?php

declare(strict_types=1);

namespace App\Repository\Seminar;

use App\Enums\SeminarEnum;
use App\Events\Backend\Seminar\StoreSeminarEvent;
use App\Events\Backend\Seminar\UpdateSeminarSeminarEvent;
use App\Http\Requests\Backend\Seminar\StoreSeminarRequest;
use App\Http\Requests\Backend\Seminar\UpdateSeminarRequest;
use App\Models\Seminar;
use App\Models\TemporaryImage;
use App\Services\PeriodDateTimeService;
use App\Traits\HasImagesUploads;
use App\Traits\HasTemporary;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SeminarRepository
{
    use HasImagesUploads;
    use HasTemporary;

    public function getSeminars(): Collection|array
    {
        return Seminar::query()
            ->orderByDesc('created_at')
            ->get([
                'id',
                'name',
                'date',
                'prices',
                'status',
                'images',
                'duration'
            ]);
    }

    public function create(StoreSeminarRequest $request): Model|Builder
    {
        $seminar = $request->validated();
        $seminar['status'] = SeminarEnum::SEMINAR_PENDING;
        $seminar['duration'] = $this->getDiffInMinutes($request);
        $seminar['start_time'] = Carbon::createFromFormat('h:i A', $request->input('start_time'));
        $seminar['end_time'] = Carbon::createFromFormat('h:i A', $request->input('end_time'));
        $seminar['address_seminar'] = $request->input('address_seminar');
        $result = Seminar::query()
            ->create($seminar);
        /**@var TemporaryImage|Model $temporary */
        $temporary = $this->getTemporaryImages($request->user());
        $temporary !== null ? $result->update(['images' => $temporary->images]) : null;
        $temporary->delete();
        StoreSeminarEvent::dispatch($result);
        return $result;
    }

    public function update(UpdateSeminarRequest $request, Seminar $seminar): Seminar
    {
        $event = $request->validated();
        $event['duration'] = $this->getDiffInMinutes($request);
        $event['start_time'] = Carbon::createFromFormat('H:i A', $request->input('start_time'));
        $event['end_time'] = Carbon::createFromFormat('H:i A', $request->input('end_time'));
        $event['address_seminar'] = $request->input('address_seminar');
        $seminar->update($event);
        /**@var TemporaryImage|Model $temporary */
        $temporary = $this->getTemporaryImages($request->user());
        $temporary !== null ? $seminar->update(['images' => $temporary->images]) : null;
        $temporary->delete();
        UpdateSeminarSeminarEvent::dispatch($seminar);
        return $seminar;
    }

    public function delete(Seminar $seminar): Seminar
    {
        $seminar->images !== null ? $this->removePathOfImages(model: $seminar) : null;
        $seminar->delete();
        return $seminar;
    }

    private function getDiffInMinutes(StoreSeminarRequest|UpdateSeminarRequest $request): int
    {
        $timeStart = Carbon::createFromFormat('h:i A', $request->input('start_time'));
        $from = Carbon::createFromFormat('h:i A', $request->input('end_time'));
        return $from->diffInMinutes($timeStart);
    }
}
