<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс ReasonsForTerminatingCollateral
 * Причины прекращения обеспечения
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\ReasonsForTerminatingCollateral
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class ReasonsForTerminatingCollateral
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'Обеспечивающее обязательство прекращено в связи с надлежащим исполнением основного обязательства' => 1,
        'Обеспечивающее обязательство прекращено в счет погашения требований кредитора по основному обязательству' => 2,
        'Залог прекращен в связи с гибелью или утратой заложенного имущества' => 3,
        'Обеспечивающее обязательство прекращено на ином основании' => 99
    ];

}
