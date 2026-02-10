<?php

namespace App\Notifications\Creator;

use App\Notifications\Connectors\EmailConnector;
use App\Notifications\NotificationConnector;

class EmailNotificationChannel extends NotificationChannel
{
    public function getNotificationChannel(): NotificationConnector
    {
        return new EmailConnector();
    }
}
