<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfRegistrationAddress
 * Виды адреса регистрации
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfRegistrationAddress
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfRegistrationAddress extends \Equifax\CreditHistory\Main\Books
{

    /**
     * Коллекция возможных значений
     * @var array
     */
    private static array $data = [
        'В документе указан адрес регистрации по месту жительства' => 1,
        'адрес регистрации по месту жительства' => 1,
        'по месту жительства' => 1,
        'В документе указан адрес регистрации по месту пребывания или адрес регистрации по месту жительства и адрес регистрации по месту пребывания' => 2,
        'адрес регистрации по месту пребывания или адрес регистрации по месту жительства и адрес регистрации по месту пребывания' => 2,
        'по месту пребывания' => 2,
        'В документе не указан адрес регистрации' => 3
    ];

}
