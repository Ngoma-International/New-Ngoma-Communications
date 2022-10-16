<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\Podcast;
use App\Notifications\CreatePodcastNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class CreatePodcastListener
{
    public function __construct()
    {
        //
    }

    public function handle(object $event): void
    {
        $podcast = Podcast::query()
            ->where("id", '=', $event->podcast->id)
            ->first();
        Notification::sendNow($podcast, new CreatePodcastNotification($podcast));
    }
}
