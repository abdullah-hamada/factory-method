<?php

namespace App\Notifications\Creator;

use App\Notifications\Connectors\SmsConnector;
use App\Notifications\NotificationConnector;

class SmsNotificationChannel extends NotificationChannel
{
    public function getNotificationChannel(): NotificationConnector
    {
        return new SmsConnector();
    }
}
