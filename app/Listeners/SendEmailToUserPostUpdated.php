<?php

namespace App\Listeners;

use App\Events\PostUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendEmailToUserPostUpdated
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostUpdated $event): void
    {
        Log::alert('Foydalanuvchiga post o\'zgartirilgani haqida email jo\'natildi Sarlavha ' . $event->post);
    }
}
