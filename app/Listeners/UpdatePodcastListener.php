<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\Podcast;
use App\Notifications\UpdatePodcastNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class UpdatePodcastListener
{
    public function __construct()
    {
        //
    }

    public function handle($event): void
    {
        $podcast = Podcast::query()
            ->where('id', '=', $event->podcast->id)
            ->first();

        Notification::sendNow($podcast, new UpdatePodcastNotification($podcast));
    }
}