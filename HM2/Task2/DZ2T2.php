<?php

$avtovaz = new automotiveFactory();
$avtovaz->prepareChassis($modelOfCar);
$avtovaz->prepareEngine($typeOfEngine);
$avtovaz->prepareGearBox($typeOfGearBox);
$avtovaz->assemblyInterior($typeOfInterior);
$avtovaz->assemblyExterior($typeOfExterior);
$avtovaz->assemblyCar($typeOfVehicleEquipment);
$avtovaz->checkForDefects($typeOfChecking);

$clashGame = new VkApplication();
$clashGame->chooseApplicationType($typeOfApplication);
$clashGame->openApplication();
$clashGame->identification($userId);
$clashGame->authentication($login, $password);
$clashGame->authorization($levelOfAccess);
$clashGame->changeGraphics($levelOfGraphics);
$clashGame->closeApplication();

$anyParser = new Parser();
$anyParser->chooseParser($typeOfParser);
$anyParser->chooseSite($nameOfWebSite);
$anyParser->setParametersForParsing($arrayOfParameters);
$anyParser->setTypeOfDataToSafe($type);

$telegramMessage = new Message();
$telegramMessage->chooseRecipient($nickname);
$telegramMessage->typeMessage($text);
$telegramMessage->typoCheck($someAlgorithm);
$telegramMessage->sendMessage();
$telegramMessage->checkOnDelivery($boolean);
$telegramMessage->changeStatus($typeOfStatus);





