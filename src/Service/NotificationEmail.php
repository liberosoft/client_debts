<?php

namespace App\Service;

class NotificationEmail extends Notification implements NotificationInterface
{

    public static function send(string $message, Logger $logger): void
    {
        $logger::log('Sending email: '. $message);
    }
}