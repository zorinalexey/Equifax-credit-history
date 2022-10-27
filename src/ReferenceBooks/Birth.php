<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

use \Equifax\CreditHistory\XmlGenerator\Xml\Xml;

/**
 * Класс Birth
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\Birth
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class Birth
{

    public function date(string $date): self
    {
        $this->date = date(Xml::dateFormat, strtotime($date));
        return $this;
    }

    public function country(string $countryName): self
    {
        $this->country = (new CodesOfCountriesAccordingToOKSM())->set($countryName)->code;
        return $this;
    }

    public function place(string $place): self
    {
        $this->place = $place;
        return $this;
    }

}
