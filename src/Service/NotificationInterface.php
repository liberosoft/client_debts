<?php

namespace App\Service;

interface NotificationInterface
{
    public static function send(string $message, Logger $logger): void;
}