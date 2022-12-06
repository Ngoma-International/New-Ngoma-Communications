<?php

declare(strict_types=1);

namespace App\Repository\Podcast;

use App\Http\Requests\Backend\StatusPodcastRequest;
use App\Models\Podcast;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class StatusPodcastRepository
{
    public function handle(StatusPodcastRequest $request): Model|Podcast|Builder|null
    {
        $podcast = Podcast::query()
            ->where('id', '=', $request->input('podcast'))
            ->first();
        $podcast->update(['status' => $request->input('status')]);
        return $podcast;
    }
}
