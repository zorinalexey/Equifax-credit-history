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
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class LiabilityAccountingAttribute
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 1;
    private static array $data = [
        'обязательство учтено у источника на балансовых счетах' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
