<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\User;
use App\Notifications\AdminNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class AdminListener
{
    public function __construct()
    {
        //
    }

    public function handle($event): void
    {
        $partners = User::query()
            ->where('id', '=', $event->admin->id)
            ->first();

        Notification::sendNow($partners, new  AdminNotification($event->admin));
    }
}
