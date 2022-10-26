<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс GracePeriodTypes
 * Виды льготного периода
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\GracePeriodTypes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class GracePeriodTypes extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 6;
    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'Льготный период по статье 6.1-1 Федерального закона от 21 декабря 2013 года N 353-ФЗ "О потребительском кредите (займе)"' => 1,
        'Льготный период по статьям 6, 7.2 Федерального закона от 3 апреля 2020 года N 106-ФЗ' => 2,
        'Льготный (переходный) период по статьям 7, 7.1 Федерального закона от 3 апреля 2020 года N 106-ФЗ' => 3,
        'Льготный период по собственной программе кредитора в связи с пандемией коронавирусной инфекции COVID-19' => 4,
        'Льготный период по собственной программе кредитора в связи с иным существенным изменением обстоятельств заключения договора' => 5,
        'Льготный период на ином основании' => 6
    ];

}
