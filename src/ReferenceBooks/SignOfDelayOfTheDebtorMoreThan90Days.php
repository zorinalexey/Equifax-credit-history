<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfDelayOfTheDebtorMoreThan90Days
 * Признак просрочки должника более 90 дней
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfDelayOfTheDebtorMoreThan90Days
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfDelayOfTheDebtorMoreThan90Days
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 0;
    private static array $data = [
        'должник нарушил срок платежа по займу или лизингу более чем на 90 календарных дней' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
