<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfParticipationInTheTransaction
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfParticipationInTheTransaction
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfParticipationInTheTransaction extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'Заемщик' => 1,
        'Поручитель' => 2,
        'Принципал по гарантии' => 3,
        'Лизингополучатель' => 4,
        'Лицо, получающее финансирование или предоставляющее обеспечение по договору с элементами займа, поручительства, гарантии или лизинга (смешанный договор)' => 5,
        'Иной вид участия' => 99
    ];

}
