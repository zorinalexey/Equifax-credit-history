<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс ReasonsForNotMakingDeal
 * Причины отказа совершить сделку
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\ReasonsForNotMakingDeal
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class ReasonsForNotMakingDeal
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'Кредитная политика заимодавца (кредитора)' => 1,
        'Ограничение деятельности микрофинансовой организации или кредитного кооператива, установленное законом о соответствующем виде деятельности' => 2,
        'Кредитная история субъекта' => 3,
        'Избыточная долговая нагрузка субъекта' => 4,
        'Несоответствие информации о субъекте, указанной в его обращении, сведениям, которыми располагает заимодавец (кредитор)' => 5,
        'В отношении субъекта возбуждено дело о банкротстве или процедура внесудебного банкротства' => 6
    ];

}