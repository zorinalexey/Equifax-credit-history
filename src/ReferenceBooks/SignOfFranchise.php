<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfFranchise
 * Признак наличия франшизы
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfFranchise
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class SignOfFranchise
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 0;
    private static array $data = [
        'в договоре страхования имеется условие об условной или безусловной франшизе' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
