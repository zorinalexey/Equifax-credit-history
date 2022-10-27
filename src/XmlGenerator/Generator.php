<?php

namespace Equifax\CreditHistory\XmlGenerator;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс Generator
 * @version 0.0.1
 * @package Equifax\CreditHistory\XmlGenerator\Generator
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class Generator
{

    private static array $data = [];

    public function __construct(array $data)
    {
        self::$data = $data;
    }

    public function get()
    {
        $obj = new \Equifax\CreditHistory\XmlGenerator\Xml\Xml();
        return $obj->get();
    }

}
