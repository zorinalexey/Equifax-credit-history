<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfRecoverableDebts
 * Виды взыскиваемых долгов
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfRecoverableDebts
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class TypesOfRecoverableDebts
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'Алименты' => 1,
        'Плата за жилое помещение' => 2,
        'Плата за коммунальные услуги' => 3,
        'Плата за услуги связи' => 4
    ];

}
