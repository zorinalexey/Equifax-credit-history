<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfConsumerCredit
 * Признак потребительского кредита (займа)
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfConsumerCredit
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class SignOfConsumerCredit
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 1;
    private static array $data = [
        'договор займа (кредита) заключен в соответствии с Федеральным законом от 21 декабря 2013 года N 353-ФЗ "О потребительском кредите (займе)" (Собрание законодательства Российской Федерации, 2013, N 51, ст. 6673; 2020, N 14, ст. 2036)' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
