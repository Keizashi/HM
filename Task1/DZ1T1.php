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

$continent = [];

foreach ($arrayOfCars as $model => $cont) {
    $continent[$cont][] = $model;
}


foreach ($continent as $cont => $models) {
    foreach ($models as $model) {
        echo "[$cont] = $models \n";
    }
}

