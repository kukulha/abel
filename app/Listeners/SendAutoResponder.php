<?php

namespace App\Listeners;

use App\Events\MessageWasReceived;
use App\Mail\MensajeRecibido;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

class SendAutoResponder
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        $message = $event->message;

        Mail::to($message->email)->send(new MensajeRecibido($message));
    }
}
