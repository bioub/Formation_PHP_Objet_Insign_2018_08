<?php

namespace MyCompany\IO;

class FileWriterSingleton
{
    protected $handle;
    protected static $instance;

    protected function __construct($filePath, $mode = 'a')
    {
        $this->handle = fopen($filePath, $mode);
    }

    protected function __clone() {}

    public function writeLn($message)
    {
        fwrite($this->handle, $message . "\n");
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

    public static function getInstance()
    {
        $path = __DIR__ . '/app.tmp';

        if (self::$instance === null) {
            self::$instance = new self($path);
        }

        return self::$instance;
    }
}