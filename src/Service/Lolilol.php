<?php

namespace App\Service;

use Monolog\Handler\HandlerInterface;
use Psr\Log\LoggerInterface;

class Lolilol
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function laugh(string $sentence)
    {
        $this->logger->notice('HAHAHA:' . $sentence);
    }
}
