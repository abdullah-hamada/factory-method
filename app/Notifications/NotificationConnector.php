<?php

namespace App\Notifications;

interface NotificationConnector
{
    public function send(string $message): void;
}
