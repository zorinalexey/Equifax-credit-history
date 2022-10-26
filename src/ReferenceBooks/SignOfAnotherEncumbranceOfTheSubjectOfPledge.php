<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfAnotherEncumbranceOfTheSubjectOfPledge
 * Признак иного обременения предмета залога
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfAnotherEncumbranceOfTheSubjectOfPledge
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfAnotherEncumbranceOfTheSubjectOfPledge
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 0;
    private static array $data = [
        'имеется иное обременение предмета залога' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
