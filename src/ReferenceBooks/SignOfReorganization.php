<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfReorganization
 * Признак реорганизации
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfReorganization
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfReorganization 
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
    public static array $data = [
        'субъект создан в результате реорганизации' => 1,
        'обстоятельство кода 1 отсутствует' => 0,
    ];

}
