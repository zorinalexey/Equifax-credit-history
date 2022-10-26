<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfUsingPaymentCard
 * Признак использования платежной карты
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfUsingPaymentCard
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class SignOfUsingPaymentCard
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'сумма займа (кредита) выдается с использованием платежной карты' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
