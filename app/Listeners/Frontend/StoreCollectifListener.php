<?php

declare(strict_types=1);

namespace App\Listeners\Frontend;

use App\Models\Collective;
use App\Notifications\Frontend\StoreCollectifNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class StoreCollectifListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }


    public function handle(object $event): void
    {
        $collectif = Collective::query()
            ->where('id', '=', $event->collective->id)
            ->first();

        Notification::sendNow($collectif, new StoreCollectifNotification($event->collective));
    }
}
