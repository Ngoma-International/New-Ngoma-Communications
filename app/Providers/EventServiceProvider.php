<?php

declare(strict_types=1);

namespace App\Providers;

use App\Events\AdminEvent;
use App\Events\AdminUpdateEvent;
use App\Events\BookingEvent;
use App\Events\ConfirmBooking;
use App\Events\UpdatePodcastEvent;
use App\Listeners\AdminListener;
use App\Listeners\AdminUpdateListener;
use App\Listeners\BookingListener;
use App\Listeners\COnfirmBookingListener;
use App\Listeners\CreatePodcastListener;
use App\Listeners\UpdatePodcastListener;
use App\ViewModels\Podcast\CreatePodcast;
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
        ],
        CreatePodcast::class => [
            CreatePodcastListener::class
        ],
        UpdatePodcastEvent::class => [
            UpdatePodcastListener::class
        ],
        BookingEvent::class => [
            BookingListener::class
        ],
        ConfirmBooking::class => [
            COnfirmBookingListener::class
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
