<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfLegalCapacity
 * Виды дееспособности
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfLegalCapacity
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfLegalCapacity extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'Гражданин полностью дееспособен (в том числе если несовершеннолетний гражданин эмансипирован или вступил в брак)' => 1,
        'дееспособен' => 1,
        'Гражданин не полностью дееспособен в силу закона, в том числе в связи с несовершеннолетием' => 2,
        'не дееспособен' => 2,
        'Суд ограничил дееспособность гражданина' => 3,
        'Суд признал гражданина недееспособным' => 4,
        'Суд признал гражданина дееспособным либо отменил ограничение дееспособности' => 5,
        'Суд отменил ограничение дееспособности' => 5,
    ];

}
