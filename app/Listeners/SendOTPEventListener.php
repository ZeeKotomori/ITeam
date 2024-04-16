<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\SendOTPNotification;
class SendOTPEventListener
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
    public function handle(object $event): void
    {
        if($event->user->activeOTP){
            $event->user->notify(new SendOTPNotification($event->user->activeOTP->otp_code));
        }
    }
}
