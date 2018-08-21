<?php

namespace Insign\Writer;


interface WriterInterface
{
    public function writeLn(string $message): void;
}
