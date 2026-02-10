<?php

namespace App\Notifications\Connectors;

use App\Notifications\NotificationConnector;
use Illuminate\Support\Facades\Log;

class EmailConnector implements NotificationConnector
{
    public function send(string $message): void
    {
        Log::channel('stack')->info('Email sent', ['message' => $message]);
    }
}
