<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfTheMonetaryObligationOfTheSource
 * Признак денежного обязательства источника
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfTheMonetaryObligationOfTheSource
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfTheMonetaryObligationOfTheSource extends \Equifax\CreditHistory\Main\Books
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
    private static array $data = [
        'объектом предоставления по сделке со стороны источника являются деньги' => 1,
        'объектом предоставления по сделке со стороны источника является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит)' => 0
    ];

}
