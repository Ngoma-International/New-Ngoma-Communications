<?php

declare(strict_types=1);

namespace App\Providers;

use App\Events\AdminEvent;
use App\Events\AdminUpdateEvent;
use App\Listeners\AdminListener;
use App\Listeners\AdminUpdateListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        AdminEvent::class => [
            AdminListener::class
        ],
        AdminUpdateEvent::class => [
            AdminUpdateListener::class
        ]
    ];

    public function boot()
    {
        //
    }

    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
