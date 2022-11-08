<?php

declare(strict_types=1);

namespace App\Repository\Podcast;

use App\Events\CreatePodcastEvent;
use App\Events\UpdatePodcastEvent;
use App\Http\Requests\Backend\Podcast\StorePodcastRequest;
use App\Http\Requests\Backend\Podcast\UpdatePodcastRequest;
use App\Models\Podcast;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PodcastBackendRepository
{
    use HasImagesUploads;

    public function getPodcasts(): Collection|array
    {
        return Podcast::query()
            ->with(['type:id,name', 'offering:id,name'])
            ->orderByDesc('created_at')
            ->get([
                'id',
                'thumbnail',
                'title',
                'type_podcast_id',
                'podcast_offering_id'
            ]);
    }

    public function store(StorePodcastRequest $request): Model|Builder
    {
        $validate = $request->all();
        $validate['thumbnail'] = $this->uploadThumbnail($request);
        $validate['images_video'] = $this->uploadAudioOrVideo($request);
        return Podcast::query()
            ->create($validate);
    }

    public function update(Podcast $podcast, UpdatePodcastRequest $request): Podcast
    {
        $edit = $request->all();
        $edit['thumbnail'] = $this->uploadThumbnail($request);
        $edit['images_video'] = $this->uploadAudioOrVideo($request);
        $podcast->thumbnail !== null ? $this->removePathOfThumbnail($podcast) : "";
        $podcast->images_video !== null ? $this->removeAudioOrVideo($podcast) : "";
        $podcast->update($edit);
        //UpdatePodcastEvent::dispatch($podcast);
        return $podcast;
    }

    public function delete(Podcast $podcast): Podcast
    {
        $podcast->thumbnail !== null ? $this->removePathOfThumbnail($podcast) : "";
        $podcast->images_video !== null ? $this->removeAudioOrVideo($podcast) : "";
        $podcast->delete();
        return $podcast;
    }
}
