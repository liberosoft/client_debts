<?php

namespace App\Service;

class ConsoleLogger extends Logger implements LoggerInterface
{

    public static function log(string $message): void
    {
        echo date('Y-m-d H:i:s').' '.$message. PHP_EOL;
    }
}