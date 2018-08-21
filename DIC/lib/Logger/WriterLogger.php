<?php

namespace Insign\Logger;


use Insign\Writer\WriterInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class WriterLogger implements LoggerInterface
{
    use LoggerTrait;

    /** @var WriterInterface */
    protected $writer;

    /**
     * WriterLogger constructor.
     * @param WriterInterface $writer
     */
    public function __construct(WriterInterface $writer)
    {
        $this->writer = $writer;
    }

    public function log($level, $message, array $context = array())
    {
        // [warn] 2018-12-01 - Une ligne
        $date = date('Y-m-d');
        $line = "[$level] $date - $message";

        $this->writer->writeLn($line);
    }
}