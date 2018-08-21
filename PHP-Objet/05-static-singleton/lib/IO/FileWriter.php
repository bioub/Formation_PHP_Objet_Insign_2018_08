<?php

namespace MyCompany\IO;

class FileWriter
{
    protected $handle;

    public function __construct($filePath, $mode = 'a')
    {
        $this->handle = fopen($filePath, $mode);
    }

    public function writeLn($message)
    {
        fwrite($this->handle, $message . "\n");
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}