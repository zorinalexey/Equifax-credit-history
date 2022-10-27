<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс FrequencyOfObligationPayments
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\FrequencyOfObligationPayments
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class FrequencyOfObligationPayments 
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
        'Более четырех раз в месяц' => 1,
        'От двух до четырех раз в месяц' => 2,
        'Один раз в месяц' => 3,
        'Один раз в квартал' => 4,
        'Один раз в полгода' => 5,
        'Один раз в год' => 6,
        'Единовременно, в том числе в день окончания срока действия договора' => 7,
        'До востребования' => 8,
        'Бессрочно' => 8,
        'Иное' => 99
    ];

}
