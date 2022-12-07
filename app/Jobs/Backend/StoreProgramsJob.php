<?php

declare(strict_types=1);

namespace App\Jobs\Backend;

use App\Models\EventProgram;
use App\Notifications\Backend\StoreProgramsNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreProgramsJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(public EventProgram $program)
    {
        //
    }

    public function handle(): void
    {
        \Notification::send($this->program, new StoreProgramsNotification($this->program));
    }
}
