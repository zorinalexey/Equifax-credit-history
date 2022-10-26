<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson
 * Признак перехода прав кредитора к другому лицу
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 0;

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'права кредитора по обязательству перешли от источника к другому лицу' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
