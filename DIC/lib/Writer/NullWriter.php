<?php

namespace Insign\Writer;


class NullWriter implements WriterInterface
{

    public function writeLn(string $message): void
    {
        
    }
}