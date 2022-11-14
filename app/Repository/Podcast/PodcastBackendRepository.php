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
            ->get([
                'id',
                'thumbnail',
                'title',
                'type_podcast_id',
                'podcast_offering_id',
                'status',
            ]);
    }

    public function store(StorePodcastRequest $request): Model|Builder
    {
        $validate = $request->validated();
        $temporary = $this->getTemporaryImages($request->user());
        $video = $this->getVideoTemporary($request->user());
        $podcast = Podcast::query()
            ->create($validate);
        $temporary !== null ? $podcast->update(['thumbnail' => $temporary->images]) : null;
        $video !== null ? $podcast->update(['images_video' => $video->path]) : null;
        $temporary->delete();
        $video->delete();
        return $podcast;
    }

    public function update(Podcast $podcast, UpdatePodcastRequest $request): Podcast
    {
        $edit = $request->validated();
        $temporary = $this->getTemporaryImages($request->user());
        $video = $this->getVideoTemporary($request->user());
        $podcast->thumbnail !== null ? $this->removePathOfThumbnail($podcast) : "";
        $podcast->images_video !== null ? $this->removeAudioOrVideo($podcast) : "";
        $podcast->update($edit);
        $temporary !== null ? $podcast->update(['thumbnail' => $temporary->images]) : null;
        $video !== null ? $podcast->update(['images_video' => $video->path]) : null;
        $temporary->delete();
        $video->delete();
        return $podcast;
    }

    public function delete(Podcast $podcast): Podcast
    {
        $podcast->thumbnail !== null ? $this->removePathOfThumbnail($podcast) : "";
        $podcast->images_video !== null ? $this->removeAudioOrVideo($podcast) : "";
        $podcast->delete();
        return $podcast;
    }

    private function getVideoTemporary(User $user): Model|Builder|null
    {
        return MediaTemporary::query()
            ->where('user_id', '=', $user->id)
            ->first();
    }
}
