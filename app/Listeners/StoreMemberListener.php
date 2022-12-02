<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\Member;
use App\Notifications\StoreMemberNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class StoreMemberListener implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        $member = Member::query()
            ->where('id', '=', $event->member->id)
            ->first();
        Notification::sendNow($member, new StoreMemberNotification($event->member));
    }
}
