<?php

namespace App\Listeners;

use App\Events\PostDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;


class SendEmailToUserPostDeleted
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
    public function handle(PostDeleted $event): void
    {
        Log::alert('Foydalanuvchiga Post o\'chirildi haqida email jo\'natildi! Sarlavha ' . $event->post->title );
    }
}
