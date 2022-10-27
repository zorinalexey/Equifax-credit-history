<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс OperationCodeCreditHistory
 * Код операции, производимой с записью кредитной истории
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\OperationCodeCreditHistory
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class OperationCodeCreditHistory 
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'источник направляет кредитную историю о субъекте или его отдельном обязательстве впервые' => 'A',
        'первичная' => 'A',
        'первичный' => 'A',
        'кредитная история изменяется или дополняется' => 'B',
        'дополнительная' => 'B',
        'дополнительный' => 'B',
        'исправляется ошибка в кредитной информации или представляется непринятая бюро кредитная информация' => 'C',
        'повторный' => 'C',
        'аннулируются сведения ' => 'D',
        'удаление' => 'D'
    ];

}
