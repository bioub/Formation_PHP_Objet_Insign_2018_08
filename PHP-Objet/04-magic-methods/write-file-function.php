<?php

$path = __DIR__ . '/app.tmp';

$file = fopen($path, 'a');
fwrite($file, "Une ligne\n");
fwrite($file, "Une autre ligne\n");
fclose($file);
