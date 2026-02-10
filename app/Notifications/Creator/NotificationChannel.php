<?php

namespace App\Notifications\Creator;

use App\Notifications\NotificationConnector;

abstract class NotificationChannel
{
    abstract public function getNotificationChannel(): NotificationConnector;

    public function send(string $message): void
    {
        $channel = $this->getNotificationChannel();
        $channel->send($message);
    }
}


