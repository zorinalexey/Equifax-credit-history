<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfComplianceWithTheProcedureForCompensation
 * Признак соблюдения порядка возмещения
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfComplianceWithTheProcedureForCompensation
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfComplianceWithTheProcedureForCompensation 
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 1;

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'принципал надлежаще возмещает гаранту выплаченную им сумму' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
