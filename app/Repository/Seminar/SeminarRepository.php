<?php

declare(strict_types=1);

namespace App\Repository\Seminar;

use App\Enums\SeminarEnum;
use App\Events\Backend\Seminar\StoreSeminarEvent;
use App\Events\Backend\Seminar\UpdateSeminarSeminarEvent;
use App\Http\Requests\Backend\Seminar\StoreSeminarRequest;
use App\Http\Requests\Backend\Seminar\UpdateSeminarRequest;
use App\Models\Seminar;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class SeminarRepository
{
    public function getSeminars(): Collection|array
    {
        return Seminar::query()
            ->orderByDesc('created_at')
            ->get();
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function create(StoreSeminarRequest $request): Model|Builder
    {
        $seminar = $request->validated();
        $seminar['status'] = SeminarEnum::SEMINAR_PENDING->value;
        $seminar['facilitator_id'] = $request->input('user_id');
        $seminar['address'] = [
            'country' => $request->input('country'),
            'city' => $request->input('city')
        ];
        $result = Seminar::query()
            ->create($seminar);
        $result->addMediaFromRequest('image')
            ->toMediaCollection('images');
        StoreSeminarEvent::dispatch($result);
        return $result;
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function update(UpdateSeminarRequest $request, Seminar $seminar): Seminar
    {
        $event = $request->validated();
        $event['status'] = SeminarEnum::SEMINAR_PENDING;
        $event['facilitator_id'] = $request->input('user_id');
        $event['address'] = [
            'country' => $request->input('country'),
            'city' => $request->input('city')
        ];
        $seminar->clearMediaCollection('image');
        $seminar->update($event);
        $seminar->addMediaFromRequest('image')
            ->toMediaCollection('images');
        UpdateSeminarSeminarEvent::dispatch($seminar);
        return $seminar;
    }

    public function delete(Seminar $seminar): Seminar
    {
        $seminar->clearMediaCollection('image');
        $seminar->delete();
        return $seminar;
    }
}
