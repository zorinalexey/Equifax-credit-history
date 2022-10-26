<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfPaymentCompliance
 * Виды соблюдения размера платежей
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfPaymentCompliance
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfPaymentCompliance extends \Equifax\CreditHistory\Main\Books
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
        'Платеж внесен в полном размере' => 1,
        'Платеж внесен не в полном размере' => 2,
        'Платеж не внесен' => 3
    ];

}
