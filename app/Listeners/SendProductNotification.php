<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ProductNotification;
use App\Events\ProductEvent;
use App\User;

class SendProductNotification
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
     * @param  ProductEvent  $event
     * @return void
     */
    public function handle(ProductEvent $event)
    {
        $admins = User::where('user_type', 'admin')->get();
        Notification::send($admins, new ProductNotification($event->product));
    }
}
