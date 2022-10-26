<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfTaxpayerNumbers
 * Виды номеров налогоплательщика
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfTaxpayerNumbers
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfTaxpayerNumbers
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'Идентификационный номер налогоплательщика, присвоенный налоговым органом Российской Федерации' => 1,
        'ИНН, присвоенный налоговым органом Российской Федерации' => 1,
        'ИНН, присвоенный налоговым органом РФ' => 1,
        'ИНН РФ' => 1,
        'Номер налогоплательщика, присвоенный уполномоченным органом иностранного государства, или его аналог' => 2,
        'ИНН, присвоенный уполномоченным органом иностранного государства, или его аналог' => 2,
        'ИНН, присвоенный уполномоченным органом иностранного государства' => 2
    ];

}
