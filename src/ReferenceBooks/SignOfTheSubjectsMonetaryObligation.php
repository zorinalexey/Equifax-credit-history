<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfTheSubjectsMonetaryObligation
 * Признак денежного обязательства субъекта
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfTheSubjectsMonetaryObligation
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfTheSubjectsMonetaryObligation 
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
        'объектом предоставления по сделке со стороны субъекта являются деньги' => 1,
        'объектом предоставления по сделке со стороны субъекта является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит)' => 0
    ];

}
