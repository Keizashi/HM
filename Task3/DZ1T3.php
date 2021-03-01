<?php

var_dump($argv);

$arrayOfDoors = [
    'ПП' => 'closed',
    'ПЛ' => 'closed',
    'ЗП' => 'closed',
    'ЗЛ' => 'closed',
    'Unlock' => false,
];

if ($argv[1] == 'ПП') {
    $arrayOfDoors['ПП'] = 'opened';
} elseif ($argv[1] == 'ПЛ') {
    $arrayOfDoors['ПЛ'] = 'opened';
} elseif ($argv[1] == 'ЗП') {
    $arrayOfDoors['ЗП'] = 'opened';
} elseif ($argv[1] == 'ЗЛ') {
    $arrayOfDoors['ЗЛ'] = 'opened';
} elseif ($argv[1] == 'Unlock') {
    foreach ($arrayOfDoors as $k => $v) {
        $arrayOfDoors[$k] = 'opened';
        $arrayOfDoors['Unlock'] = 'Activated';
    }
} else {
    echo "Ошибка: введите наименование двери в формате: ПП, ПЛ, ЗП, ЗЛ \n
    Или разблокируйте все двери функцией Unlock \n";
}

print_r($arrayOfDoors);