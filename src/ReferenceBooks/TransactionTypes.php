<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TransactionTypes
 * Типы сделки
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TransactionTypes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TransactionTypes extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Значение по умолчанию
     * @var type
     */
    public $default = 1;
    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'Договор займа (кредита)' => 1,
        'Договор лизинга' => 2,
        'Независимая гарантия' => 3,
        'Поручительство' => 4,
        'Договор с элементами займа, поручительства, гарантии или лизинга (смешанный договор)' => 5
    ];

}
