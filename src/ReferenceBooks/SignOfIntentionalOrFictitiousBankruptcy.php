<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfIntentionalOrFictitiousBankruptcy
 * Признак преднамеренного или фиктивного банкротства
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfIntentionalOrFictitiousBankruptcy
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfIntentionalOrFictitiousBankruptcy extends \Equifax\CreditHistory\Main\Books
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
        'имеются признаки преднамеренного или фиктивного банкротства субъекта' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
