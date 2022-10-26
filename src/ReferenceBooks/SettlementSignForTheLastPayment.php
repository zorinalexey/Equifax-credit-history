<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SettlementSignForTheLastPayment
 * Признак расчета по последнему платежу
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SettlementSignForTheLastPayment
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SettlementSignForTheLastPayment extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'субъект внес платеж либо наступил срок для внесения платежа по срочному долгу' => 1,
        'прошло 30 календарных дней с даты последнего расчета суммы задолженности по показателю 25.8 "Дата расчета" (debt.calc_date)' => 0
    ];

}
