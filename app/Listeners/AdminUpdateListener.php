<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\User;
use App\Notifications\UpdateAdminNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class AdminUpdateListener
{
    public function __construct()
    {
        //
    }

    public function handle(object $event): void
    {
        $partners = User::query()
            ->where('id', '=', $event->user->id)
            ->firstOrFail();

        Notification::sendNow($partners, new  UpdateAdminNotification($event->user));
    }
}
