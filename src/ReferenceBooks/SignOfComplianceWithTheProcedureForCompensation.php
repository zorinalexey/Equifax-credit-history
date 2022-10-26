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
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class SignOfComplianceWithTheProcedureForCompensation
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 1;
    private static array $data = [
        'принципал надлежаще возмещает гаранту выплаченную им сумму' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
