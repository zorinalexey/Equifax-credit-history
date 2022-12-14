<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfAcquirersOfTheRightsOfCreditorLegalEntity
 * Виды приобретателей прав кредитора - юридического лица
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfAcquirersOfTheRightsOfCreditorLegalEntity
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfAcquirersOfTheRightsOfCreditorLegalEntity 
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'Кредитная организация' => 1,
        'Некредитная финансовая организация' => 2,
        'Коллекторская организация' => 3,
        'Иная организация' => 99
    ];

}
