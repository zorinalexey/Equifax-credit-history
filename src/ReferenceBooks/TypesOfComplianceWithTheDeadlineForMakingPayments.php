<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfComplianceWithTheDeadlineForMakingPayments
 * Виды соблюдения срока внесения платежей
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfComplianceWithTheDeadlineForMakingPayments
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfComplianceWithTheDeadlineForMakingPayments extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'Срок внесения платежа не наступил (новый договор)' => 1,
        'Новый договор' => 1,
        'Платежи вносятся своевременно' => 2,
        'Платежи вносятся несвоевременно' => 3
    ];

}
