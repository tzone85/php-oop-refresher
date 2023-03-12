<?php

namespace App\Logging;

trait LoggableTrait
{
    protected $logger;
    public function setLogger(Logger $logger): void
    {
        $this->logger = $logger;
    }

    public function getLogger()
    {
        return $this->logger;
    }
}