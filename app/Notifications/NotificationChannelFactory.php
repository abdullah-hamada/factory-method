<?php

namespace App\Notifications;

use App\Notifications\Creator\EmailNotificationChannel;
use App\Notifications\Creator\NotificationChannel;
use App\Notifications\Creator\PushNotificationChannel;
use App\Notifications\Creator\SmsNotificationChannel;
use InvalidArgumentException;

class NotificationChannelFactory
{
    public static function getChannel(string $type): NotificationChannel
    {
        return match (strtolower($type)) {
            'email' => new EmailNotificationChannel(),
            'sms' => new SmsNotificationChannel(),
            'push' => new PushNotificationChannel(),
            default => throw new InvalidArgumentException("Unknown notification type: {$type}."),
        };
    }
}
