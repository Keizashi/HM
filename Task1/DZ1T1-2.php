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

foreach ($arrayOfCars as $continent => $models) {
    echo $models . ': ' . $continent . "\n";
}

