<?php

var_dump($argv);

function charCount($text, $symbol)
{

   $rest = substr_count($text, $symbol);

    return $rest;

}

echo charCount($argv[1], $argv[2]);

