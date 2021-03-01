<?php

var_dump($argv);

function charCount($text, $symbol)
{
    return substr_count($text, $symbol);
}

echo charCount($argv[1], $argv[2]);

