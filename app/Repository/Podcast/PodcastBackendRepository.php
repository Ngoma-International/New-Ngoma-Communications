<?php

declare(strict_types=1);

namespace App\Repository\Podcast;

use App\Events\CreatePodcastEvent;
use App\Events\UpdatePodcastEvent;
use App\Http\Requests\Backend\Podcast\StorePodcastRequest;
use App\Http\Requests\Backend\Podcast\UpdatePodcastRequest;
use App\Models\MediaTemporary;
use App\Models\Podcast;
use App\Models\TemporaryImage;
use App\Models\User;
use App\Traits\HasImagesUploads;
use App\Traits\HasTemporary;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PodcastBackendRepository
{
    use HasImagesUploads;
    use HasTemporary;

    public function getPodcasts(): Collection|array
    {
        return Podcast::query()
            ->with(['type:id,name', 'offering:id,name'])
            ->orderByDesc('created_at')
            ->get();
    }

    public function store(StorePodcastRequest $request): Model|Builder
    {
        $validate = $request->validated();
        $temporary = $this->getTemporaryImages($request->user());
        $validate['images_video'] = self::uploadAudioOrVideo($request);
        $podcast = Podcast::query()
            ->create($validate);
        $temporary !== null ? $podcast->update(['thumbnail' => $temporary->images]) : null;
        $temporary->delete();
        return $podcast;
    }

    public function update(Podcast $podcast, UpdatePodcastRequest $request): Podcast
    {
        $temporary = $this->getTemporaryImages($request->user());
        $podcast->thumbnail !== null ? $this->removePathOfThumbnail($podcast) : "";
        $podcast->images_video !== null ? $this->removeAudioOrVideo($podcast) : "";
        $edit = $request->validated();
        $edit['images_video'] = self::uploadAudioOrVideo($request);
        $podcast->update($edit);
        $temporary !== null ? $podcast->update(['thumbnail' => $temporary->images]) : null;
        $temporary->delete();
        return $podcast;
    }

    public function delete(Podcast $podcast): Podcast
    {
        $podcast->thumbnail !== null ? $this->removePathOfThumbnail($podcast) : "";
        $podcast->delete();
        return $podcast;
    }
}
