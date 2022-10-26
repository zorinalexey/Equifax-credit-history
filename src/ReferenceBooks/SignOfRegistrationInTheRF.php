<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfRegistrationInTheRF
 * Признак регистрации в Российской Федерации
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfRegistrationInTheRF
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfRegistrationInTheRF
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 0;
    private static array $data = [
        'лицо зарегистрировано на территории Российской Федерации' => 1,
        'обстоятельство кода 1 отсутствует' => 0,
    ];

}
