<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfTheTerminationOfTheObligation
 * Признак прекращения обязательства
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfTheTerminationOfTheObligation
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfTheTerminationOfTheObligation
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'взаимные обязательства субъекта и источника прекращены (независимо от основания)' => 1,
        'обязательство субъекта прекратилось' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
