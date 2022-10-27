<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс ReasonsForStoppingTheTransferOfInformation
 * Причины прекращения передачи информации
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\ReasonsForStoppingTheTransferOfInformation
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class ReasonsForStoppingTheTransferOfInformation 
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'Истек срок действия договора об оказании информационных услуг' => 1,
        'Договор об оказании информационных услуг расторгнут на ином основании' => 2,
        'Права кредитора по обязательству перешли к другому лицу' => 3,
        'Обязанности источника исполняет кредитный управляющий или иной уполномоченный участник синдиката кредиторов' => 4,
        'Обязанности источника по договору, заключенному на инвестиционной платформе, исполняет единственный заимодавец либо оператор инвестиционной платформы' => 5
    ];

}
