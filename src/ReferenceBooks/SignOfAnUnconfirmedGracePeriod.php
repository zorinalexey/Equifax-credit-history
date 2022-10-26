<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс SignOfAnUnconfirmedGracePeriod
 * Признак неподтвержденного льготного периода
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\SignOfAnUnconfirmedGracePeriod
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class SignOfAnUnconfirmedGracePeriod extends \Equifax\CreditHistory\Main\Books
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
        'льготный период для заемщика признан неустановленным согласно части 29 статьи 6 Федерального закона от 3 апреля 2020 года N 106-ФЗ "О внесении изменений в Федеральный закон "О Центральном банке Российской Федерации (Банке России)" и отдельные законодательные акты Российской Федерации в части особенностей изменения условий кредитного договора, договора займа" (Собрание законодательства Российской Федерации, 2020, N 14, ст. 2036) (далее - Федеральный закон от 3 апреля 2020 года N 106-ФЗ)' => 1,
        'обстоятельство кода 1 отсутствует' => 0
    ];

}
