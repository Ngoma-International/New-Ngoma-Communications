<?php

declare(strict_types=1);

namespace App\Repository\Members;

use App\Http\Requests\Backend\StoreFacilitatorRequest;
use App\Http\Requests\Backend\UpdateFacilitatorRequest;
use App\Models\Facilitator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class FacilitatorRepository
{
    public function getFacilitators(): array|Collection|\Illuminate\Support\Collection
    {
        return Facilitator::query()
            ->orderByDesc('created_at')->get();
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function store(StoreFacilitatorRequest $request): Model|Facilitator|Builder
    {
        $facilitator = Facilitator::query()
            ->create($request->validated());

        $facilitator->addMediaFromRequest('image')
            ->toMediaCollection('image');

        return $facilitator;
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function update(UpdateFacilitatorRequest $request, Facilitator $facilitator): Facilitator
    {
        $facilitator->clearMediaCollection('image');
        $facilitator->update($request->validated());
        $facilitator->addMediaFromRequest('image')
            ->toMediaCollection('image');

        return $facilitator;
    }

    public function delete(Facilitator $facilitator): Facilitator
    {
        $facilitator->clearMediaCollection('image');
        $facilitator->delete();
        return $facilitator;
    }
}
