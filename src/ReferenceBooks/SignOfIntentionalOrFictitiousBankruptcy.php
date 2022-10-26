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
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class SignOfIntentionalOrFictitiousBankruptcy
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 0;
    private static array $data = [
        'имеются признаки преднамеренного или фиктивного банкротства субъекта' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
