<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfCollateralUsed
 * Виды использованного обеспечения
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfCollateralUsed
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class TypesOfCollateralUsed
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'Залог' => 1,
        'Поручительство' => 2,
        'Независимая гарантия' => 3,
        'Иная гарантия' => 4,
        'Гарантийный депозит' => 5,
        'Страхование' => 6,
        'Иное обеспечение' => 99
    ];

}
