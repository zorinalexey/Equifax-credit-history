<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс GroundsForTerminatingAnObligation
 * Основания прекращения обязательства
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\GroundsForTerminatingAnObligation
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class GroundsForTerminatingAnObligation
{

    use \Equifax\CreditHistory\Main\Books;

    private int $default = 1;
    private static array $data = [
        'Надлежащее исполнение обязательства' => 1,
        'Принудительное исполнение обязательства' => 2,
        'По соглашению сторон' => 3,
        'Требования кредитора погашены за счет обеспечения' => 4,
        'Односторонний отказ кредитора' => 5,
        'Односторонний отказ должника' => 6,
        'Отступное' => 7,
        'Зачет' => 8,
        'Совпадение кредитора и должника в одном лице' => 9,
        'Новация' => 10,
        'Прощение долга' => 11,
        'Невозможность исполнения обязательства' => 12,
        'На основании акта органа государственной власти или органа местного самоуправления' => 13,
        'Смерть гражданина' => 14,
        'Ликвидация юридического лица' => 15,
        'Иное основание' => 99
    ];

}
