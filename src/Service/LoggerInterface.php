<?php

namespace App\Service;

interface LoggerInterface
{
    public static function log(string $message) : void;
}