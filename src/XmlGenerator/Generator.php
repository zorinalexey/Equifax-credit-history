<?php

namespace Equifax\CreditHistory\XmlGenerator;

if ( ! defined('ROOT')) {
    exit();
}

use \Equifax\CreditHistory\ClientInterface;
use \Equifax\CreditHistory\Source;
use \Equifax\CreditHistory\XmlGenerator\Xml\Xml;

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

    private Xml $data;

    public function __construct(Source $source, ClientInterface $client)
    {
        $this->data = new Xml($source, $client);
    }

    public function get(string $dir = ROOT . 'files')
    {
        return $this->data->get($dir);
    }

}
