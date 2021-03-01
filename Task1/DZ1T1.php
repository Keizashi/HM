<?php

$arrayOfCars = [
    'Toyota' => 'Japanese',
    'Lexus' => 'Japanese',
    'BMW' => 'Europe',
    'AUDI' => 'Europe',
    'Opel' => 'Europe',
    'Renault' => 'Europe',
    'Mercedes-Benz' => 'Europe',
    'FORD' => 'North America',
    'Dodge' => 'North America',
    'Chevrolet' => 'North America',
];

foreach ($arrayOfCars as $k => $v) {
    $continent[$v][] = $k;
}

//print_r($continent);

foreach ($continent as $k => $v) {
    foreach ($v as $ik => $v2) {
        echo "[$k] = $v2 \n";
    }
}

/*
function test_print($item2, $key)
{
    echo "$key. $item2\n";
}

array_walk($continent, 'test_print');
*/