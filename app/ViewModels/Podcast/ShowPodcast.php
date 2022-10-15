<?php

declare(strict_types=1);

namespace App\ViewModels\Podcast;

use App\Http\Controllers\Backend\Podcast\PodcastBackendController;
use App\Models\Podcast;
use App\Models\PodcastOffering;
use App\Models\TypePodcast;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ViewModels\ViewModel;

class ShowPodcast extends ViewModel
{
    public string $indexUrl;
    public string $editUrl;
    public string $deleteUrl;

    public function __construct(
        public Podcast $podcast
    ) {
        $this->indexUrl = action([PodcastBackendController::class, 'index']);
        $this->editUrl = action([PodcastBackendController::class, 'edit'], $this->podcast);
        $this->deleteUrl = action([PodcastBackendController::class, 'destroy'], $this->podcast);
    }

    public function podcast(): Podcast
    {
        return $this->podcast;
    }

    public function getTypePodcast(): Model|Builder|null
    {
        return TypePodcast::query()
            ->where('id', '=', $this->podcast->type_podcast_id)
            ->first();
    }

    public function getAuthor(): Model|Builder|null
    {
        return User::query()
            ->where('id', '=', $this->podcast->user_id)
            ->first();
    }

    public function getPodcastOffering(): Model|Builder|null
    {
        return PodcastOffering::query()
            ->where('id', '=', $this->podcast->podcast_offering_id)
            ->first();
    }
}
