<?php

namespace App\Service;

class BrowserLogger extends Logger implements LoggerInterface
{

    public static function log(string $message): void
    {
        echo date('Y-m-d H:i:s').' '.$message. '<br />';
    }
}