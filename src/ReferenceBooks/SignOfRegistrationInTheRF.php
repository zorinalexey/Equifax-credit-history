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
class SignOfRegistrationInTheRF extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 0;
    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'лицо зарегистрировано на территории Российской Федерации' => 1,
        'обстоятельство кода 1 отсутствует' => 0,
    ];

}
