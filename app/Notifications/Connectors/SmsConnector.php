<?php

namespace App\Notifications\Connectors;

use App\Notifications\NotificationConnector;
use Illuminate\Support\Facades\Log;

class SmsConnector implements NotificationConnector
{
    public function send(string $message): void
    {
        Log::channel('stack')->info('SMS sent', ['message' => $message]);
    }
}
