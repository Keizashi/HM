<?php

$doorsOpenedState = [
    'ПП' => false,
    'ПЛ' => false,
    'ЗП' => false,
    'ЗЛ' => false,
    'Unlock' => false,
];

if ($argv[1] === 'Unlock') {
    $doorsOpenedState = array_combine(array_keys($doorsOpenedState), array_fill(0, 5, true));
} elseif (!array_key_exists($argv[1], $doorsOpenedState)) {
    echo "Ошибка: введите наименование двери в формате: ПП, ПЛ, ЗП, ЗЛ \n
    Или разблокируйте все двери функцией Unlock \n";
} else {
    $doorsOpenedState[$argv[1]] = true;
}

var_export($doorsOpenedState);