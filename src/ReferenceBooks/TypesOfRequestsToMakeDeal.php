<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfRequestsToMakeDeal
 * Виды обращений с предложением совершить сделку
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfRequestsToMakeDeal
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfRequestsToMakeDeal 
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 99;

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'Посреднический - оформление через агента источника' => 1,
        'Дистанционный - оформление с использованием средств телекоммуникаций' => 2,
        'В кредитную организацию - оформление в филиале или внутреннем структурном подразделении кредитной организации' => 3,
        'В некредитную финансовую организацию' => 4,
        'В иную организацию - источник' => 5,
        'Иной способ' => 99
    ];

}
