<?php

declare(strict_types=1);

namespace App\Repository\Seminar;

use App\Enums\SeminarEnum;
use App\Events\Backend\Seminar\StoreSeminarEvent;
use App\Events\Backend\Seminar\UpdateSeminarSeminarEvent;
use App\Http\Requests\Backend\Seminar\StoreSeminarRequest;
use App\Http\Requests\Backend\Seminar\UpdateSeminarRequest;
use App\Models\Seminar;
use App\Traits\ImagesUploadsTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SeminarRepository
{
    use ImagesUploadsTrait;

    public function getSeminars(): Collection|array
    {
        return Seminar::query()
            ->select([
                'id',
                'name',
                'date',
                'prices',
                'status',
                'images',
                'duration'
            ])
            ->orderByDesc('created_at')
            ->get();
    }

    public function create(StoreSeminarRequest $request): Model|Builder
    {
        $seminar = $request->all();
        $seminar['images'] = self::uploadFiles($request);
        $seminar['status'] = SeminarEnum::SEMINAR_PENDING;
        $seminar['duration'] = $this->getDiffInMinutes($request);
        $seminar['start_time'] = Carbon::createFromFormat('H:i A', $request->input('start_time'));
        $seminar['end_time'] = Carbon::createFromFormat('H:i A', $request->input('end_time'));
        $result = Seminar::query()
            ->create($seminar);
        StoreSeminarEvent::dispatch($result);
        return $result;
    }

    public function update(UpdateSeminarRequest $request, Seminar $seminar): Seminar
    {
        $event = $request->all();
        $seminar->images !== null ? $this->removePathOfImages(model: $seminar): null;
        $event['images'] = self::uploadFiles($request);
        $event['duration'] = $this->getDiffInMinutes($request);
        $event['start_time'] = Carbon::createFromFormat('H:i A', $request->input('start_time'));
        $event['end_time'] = Carbon::createFromFormat('H:i A', $request->input('end_time'));
        $seminar->update($event);
        UpdateSeminarSeminarEvent::dispatch($seminar);
        return $seminar;
    }

    public function delete(Seminar $seminar): Seminar
    {
        $seminar->images !== null ? $this->removePathOfImages(model: $seminar): null;
        $seminar->delete();
        return $seminar;
    }

    private function getDiffInMinutes(StoreSeminarRequest|UpdateSeminarRequest $request): int
    {
        $to = Carbon::createFromFormat('h:i A', $request->input('start_time'));
        $from = Carbon::createFromFormat('h:i A', $request->input('end_time'));
        return $from->diffInMinutes($to);
    }
}
