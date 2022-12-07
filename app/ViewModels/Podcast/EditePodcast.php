<?php

declare(strict_types=1);

namespace App\ViewModels\Podcast;

use App\Enums\RoleEnum;
use App\Http\Controllers\Admin\Podcast\PodcastBackendController;
use App\Models\Podcast;
use App\Models\PodcastOffering;
use App\Models\TypePodcast;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class EditePodcast extends ViewModel
{
    public string $indexUrl;

    public function __construct(public Podcast $podcast)
    {
        $this->indexUrl = action([PodcastBackendController::class, 'index']);
    }

    public function podcast(): Podcast
    {
        return $this->podcast ?? new Podcast();
    }

    public function typePodcasts(): Collection|array
    {
        return TypePodcast::query()
            ->select(['id', 'name'])
            ->get();
    }

    public function podcastOffering(): Collection|array
    {
        return PodcastOffering::query()
            ->select(['id', 'name'])
            ->get();
    }

    public function authors(): Collection|array
    {
        return User::query()
            ->select(['id', 'name'])
            ->whereIn('role_id', [RoleEnum::Role_Advisor, RoleEnum::Role_Admin])
            ->get();
    }
}
