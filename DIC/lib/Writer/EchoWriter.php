<?php

namespace Insign\Writer;


class EchoWriter implements WriterInterface
{

    public function writeLn(string $message): void
    {
        echo "$message\n";
    }
}