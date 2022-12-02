<?php

declare(strict_types=1);

namespace App\Events;

use App\Models\Member;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class StoreMemberEvent implements ShouldQueue
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Member $member)
    {
        //
    }

    public function broadcastOn(): Channel|PrivateChannel|array
    {
        return new PrivateChannel('channel-name');
    }
}
