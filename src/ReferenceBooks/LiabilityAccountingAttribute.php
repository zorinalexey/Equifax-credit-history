<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс LiabilityAccountingAttribute
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\LiabilityAccountingAttribute
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class LiabilityAccountingAttribute extends \Equifax\CreditHistory\Main\Books
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
    private static array $data = [
        'обязательство учтено у источника на балансовых счетах' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
