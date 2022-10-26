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
class SignOfTheMonetaryObligationOfTheSource
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 1;
    private static array $data = [
        'объектом предоставления по сделке со стороны источника являются деньги' => 1,
        'объектом предоставления по сделке со стороны источника является иное имущество (в том числе драгоценные металлы, сельскохозяйственная продукция, а также товарный кредит)' => 0
    ];

}
