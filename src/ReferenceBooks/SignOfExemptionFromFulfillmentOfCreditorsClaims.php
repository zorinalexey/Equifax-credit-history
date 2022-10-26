<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfExemptionFromFulfillmentOfCreditorsClaims
 * Признак освобождения от исполнения требований кредиторов
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfExemptionFromFulfillmentOfCreditorsClaims
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfExemptionFromFulfillmentOfCreditorsClaims extends \Equifax\CreditHistory\Main\Books
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
        'гражданин освобожден от исполнения требований кредиторов' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
