<?php


$doorsOpenedState = [
    'ПП' => false,
    'ПЛ' => false,
    'ЗП' => false,
    'ЗЛ' => false,
    'Unlock' => false,
];

if ($argv[1] == 'ПП') {
    $doorsOpenedState['ПП'] = true;
} elseif ($argv[1] == 'ПЛ') {
    $doorsOpenedState['ПЛ'] = true;
} elseif ($argv[1] == 'ЗП') {
    $doorsOpenedState['ЗП'] = true;
} elseif ($argv[1] == 'ЗЛ') {
    $doorsOpenedState['ЗЛ'] = true;
} elseif ($argv[1] == 'Unlock') {
    foreach ($doorsOpenedState as $argument => $state) {
        $doorsOpenedState[$argument] = true;
    }
    $doorsOpenedState['Unlock'] = true;
} else {
    echo "Ошибка: введите наименование двери в формате: ПП, ПЛ, ЗП, ЗЛ \n
    Или разблокируйте все двери функцией Unlock \n";
}

print_r($doorsOpenedState);