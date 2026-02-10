<?php

namespace App\Notifications\Connectors;

use App\Notifications\NotificationConnector;
use Illuminate\Support\Facades\Log;

class PushConnector implements NotificationConnector
{
    public function send(string $message): void
    {
        Log::channel('stack')->info('Push notification sent', ['message' => $message]);
    }
}
