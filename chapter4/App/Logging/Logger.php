<?php

namespace App\Logging;
use App\Logging\LoggableTrait;
class Logger
{
    use LoggableTrait;
    public function log(): string
    {
        return 'Logging...';
    }
}