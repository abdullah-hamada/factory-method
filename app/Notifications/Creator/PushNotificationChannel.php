<?php

namespace App\Notifications\Creator;

use App\Notifications\Connectors\PushConnector;
use App\Notifications\NotificationConnector;

class PushNotificationChannel extends NotificationChannel
{
    public function getNotificationChannel(): NotificationConnector
    {
        return new PushConnector();
    }
}
