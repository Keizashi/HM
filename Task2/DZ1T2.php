<?php

$str = $argv[1];
$counter = 0;
$len = strlen($str);

for ($i = 0; $i < $len; $i++) {
    if ($str[$i] === $argv[2]) {
        $counter++;
    }
}
echo 'Символ ' . $argv[2] . " встречается в строке $counter раз";