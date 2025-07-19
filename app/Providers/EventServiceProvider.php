<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\PostCreated;
use App\Listeners\SendEmailToUserPostCreated;
use App\Listeners\SendNotificationToAdminPostCreated;
use App\Events\PostUpdated;
use App\Listeners\SendEmailToUserPostUpdated;
use App\Listeners\SendNotificationToAdminPostUpdated;
use App\Events\PostDeleted;
use App\Listeners\SendEmailToUserPostDeleted;
use App\Listeners\SendNotificationToAdminPostDeleted;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        PostCreated::class => [
            SendEmailToUserPostCreated::class,
            SendNotificationToAdminPostCreated::class
        ],

        PostUpdated::class => [
            SendEmailToUserPostUpdated::class,
            SendNotificationToAdminPostUpdated::class,
        ],

        PostDeleted::class => [
            SendEmailToUserPostDeleted::class,
            SendNotificationToAdminPostDeleted::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
