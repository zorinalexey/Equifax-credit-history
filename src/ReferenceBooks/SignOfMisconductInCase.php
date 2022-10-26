<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfMisconductInCase
 * Признак неправомерных действий в деле
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfMisconductInCase
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfMisconductInCase extends \Equifax\CreditHistory\Main\Books
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
        'в ЕФРСБ имеются сведения о неправомерных действиях субъекта' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
