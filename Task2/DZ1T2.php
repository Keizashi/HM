<?php

function newCharCount($input)
{
    $text = $input;

    foreach (count_chars($text, 1) as $i => $val) {
        echo "\"", chr($i), "\" встречается в строке $val раз(а).\n";
    }
}

echo newCharCount($argv[1]);