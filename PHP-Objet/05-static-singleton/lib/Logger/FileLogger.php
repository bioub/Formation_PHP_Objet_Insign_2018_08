<?php

namespace MyCompany\Logger;

use MyCompany\IO\FileWriter;

class FileLogger
{
    /** @var FileWriter */
    protected $fw;

    /**
     * FileLogger constructor.
     * @param FileWriter $fw
     */
    public function __construct(FileWriter $fw)
    {
        $this->fw = $fw;
    }

    public function log($logLevel, $message)
    {
        // [warn] 2018-12-01 - Une ligne
        $date = date('Y-m-d');
        $line = "[$logLevel] $date - $message";

        $this->fw->writeLn($line);
    }

    public function __call($name, $arguments)
    {
        $this->log($name, $arguments[0]);
    }

}