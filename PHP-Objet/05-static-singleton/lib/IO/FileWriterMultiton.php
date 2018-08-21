<?php

namespace MyCompany\IO;

class FileWriterMultiton
{
    protected $handle;
    protected static $instances = [];

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

    public static function getInstance($path)
    {
        if (!isset(self::$instances[$path])) {
            self::$instances[$path] = new self($path);
        }

        return self::$instances[$path];
    }
}