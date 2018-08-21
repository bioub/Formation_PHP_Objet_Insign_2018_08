<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 20/08/2018
 * Time: 16:59
 */

namespace Formation\Logger;


use Formation\IO\FileWriter;
use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class FileLoggerWithTrait implements LoggerInterface
{
    use LoggerTrait;

    /** @var FileWriter */
    protected $fw;

    /**
     * FileLoggerWithInterface constructor.
     * @param FileWriter $fw
     */
    public function __construct(FileWriter $fw)
    {
        $this->fw = $fw;
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     *
     * @return void
     */
    public function log($level, $message, array $context = array())
    {
        // [warn] 2018-12-01 - Une ligne
        $date = date('Y-m-d');
        $line = "[$level] $date - $message";

        $this->fw->writeLn($line);
    }
}