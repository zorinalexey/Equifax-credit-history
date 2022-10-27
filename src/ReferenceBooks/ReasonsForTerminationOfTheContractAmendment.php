<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс ReasonsForTerminationOfTheContractAmendment
 * Причины прекращения действия изменения договора
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\ReasonsForTerminationOfTheContractAmendment
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class ReasonsForTerminationOfTheContractAmendment 
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'По соглашению сторон' => 1,
        'В связи с истечением срока действия изменения договора' => 2,
        'В связи с наступлением условия прекращения действия изменения договора' => 3,
        'Односторонний отказ источника от изменения договора' => 4,
        'Односторонний отказ субъекта от изменения договора' => 5,
        'По иному основанию' => 99
    ];

}
