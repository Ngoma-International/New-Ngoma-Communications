<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\Event;
use App\Notifications\EventNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class EventListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(object $event): void
    {
        $notify = Event::query()
            ->where('id', '=', $event->event->id)
            ->first();

        Notification::sendNow($notify, new EventNotification($event->event));
    }
}
