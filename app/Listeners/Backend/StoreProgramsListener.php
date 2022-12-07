<?php

declare(strict_types=1);

namespace App\Listeners\Backend;

use App\Jobs\Backend\StoreProgramsJob;
use App\Models\EventProgram;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreProgramsListener implements ShouldQueue
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
        $programs = EventProgram::query()
            ->where('id', '=', $event->program->id)
            ->first();
        StoreProgramsJob::dispatch($programs);
    }
}
