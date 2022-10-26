<?php

require_once 'vendor/autoload.php';

$client = new \Equifax\CreditHistory\Client();
$client->documentTypes = 'Паспорт гражданина Российской Федерации';
$client->typesOfCollateralAndNonMonetaryGrantsUnderTheTransaction = '3.10';
print_r($client->getReport());
