<?php

namespace Insign\Writer;


class FileWriter implements WriterInterface
{
    /** @var bool|resource */
    protected $handle;

    public function __construct($filePath, $mode = 'a')
    {
        $this->handle = fopen($filePath, $mode);

        if (!$this->handle) {
            throw new \Exception("Wrong path $filePath");
        }
    }

    public function writeLn($message): void
    {
        fwrite($this->handle, $message . "\n");
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}