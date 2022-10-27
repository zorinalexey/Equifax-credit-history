<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfImproperPerformanceOfAnObligation
 * Признак ненадлежащего исполнения обязательства
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfImproperPerformanceOfAnObligation
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfImproperPerformanceOfAnObligation 
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 1;

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'субъект не исполнил свое обязательство или его часть' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
