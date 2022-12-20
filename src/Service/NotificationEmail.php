<?php

namespace App\Service;

// You don't need to implement NotificationInterface because you are extending Notification which already does this
class NotificationEmail extends Notification implements NotificationInterface
{

    public static function send(string $message, Logger $logger): void
    {
        $logger::log('Sending email: '. $message);
    }
}