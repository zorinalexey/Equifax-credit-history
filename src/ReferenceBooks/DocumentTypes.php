<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

use Equifax\CreditHistory\XmlGenerator\Xml\Xml;

/**
 * Класс DocumentTypes
 * Виды документов, удостоверяющих личность
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\DocumentTypes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class DocumentTypes
{

    /**
     * Значение по умолчанию
     * @var type
     */
    private int $default = 21;

    /**
     * Коллекция возможных значений
     * @var array
     */
    public static array $data = [
        'Паспорт гражданина Российской Федерации' => 21,
        'Паспорт гражданина Российской Федерации, удостоверяющий его личность за пределами территории Российской Федерации' => 22.1,
        'Дипломатический паспорт, удостоверяющий личность гражданина Российской Федерации за пределами территории Российской Федерации' => 22.2,
        'Служебный паспорт, удостоверяющий личность гражданина Российской Федерации за пределами территории Российской Федерации' => 22.3,
        'Удостоверение личности моряка' => 23,
        'Удостоверение личности военнослужащего' => 24,
        'Военный билет военнослужащего' => 25,
        'Временное удостоверение личности гражданина Российской Федерации, выдаваемое на период оформления паспорта гражданина Российской Федерации' => 26,
        'Свидетельство о рождении гражданина Российской Федерации' => 27,
        'Иной документ, удостоверяющий личность гражданина Российской Федерации в соответствии с законодательством Российской Федерации' => 28,
        'Паспорт иностранного гражданина либо иной документ, установленный федеральным законом или признаваемый в соответствии с международным договором Российской Федерации в качестве документа, удостоверяющего личность иностранного гражданина' => 31,
        'Документ, выданный иностранным государством и признаваемый в соответствии с международным договором Российской Федерации в качестве документа, удостоверяющего личность лица без гражданства' => 32,
        'Иной документ, признаваемый документом, удостоверяющим личность лица без гражданства в соответствии с законодательством Российской Федерации и международным договором Российской Федерации' => 35,
        'Удостоверение беженца' => 37,
        'Паспорт иностранного гражданина' => 31,
        'Удостоверение вынужденного переселенца' => 38,
        'Иной документ' => 999
    ];
    public ?string $country;
    public ?string $country_text;
    public ?string $serial;
    public ?string $number;
    public ?string $date;
    public ?string $who;
    public ?string $department_code;
    public ?string $end_date;

    public function set(string $documentName = 'Паспорт гражданина Российской Федерации'): self
    {
        foreach (self::$data as $name => $code) {
            if (mb_strtolower($documentName) === mb_strtolower($name)
                OR mb_strtolower($documentName) === mb_strtolower($code)) {
                $this->type = $code;
                $this->type_text = $name;
            }
        }
        return $this;
    }

    public function country(string $country = 'РОССИЯ'): self
    {
        $countryBook = new CodesOfCountriesAccordingToOKSM();
        $this->country = $countryBook->set($country)->code;
        $this->country_text = $countryBook->set($country)->name;
        return $this;
    }

    public function serial(string $serial): self
    {
        $this->serial = $serial;
        return $this;
    }

    public function number(string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function date(string $date): self
    {
        $this->date = date(Xml::dateFormat, strtotime($date));
        return $this;
    }

    public function who(string $who): self
    {
        $this->who = $who;
        return $this;
    }

    public function departmentCode(string $departamentCode): self
    {
        $this->department_code = preg_replace('~^(\d{3})(.+)?(\d{3})$~ui', '$1-$3', $departamentCode);
        return $this;
    }

    public function endDate(string $date): self
    {
        $this->end_date = date(Xml::dateFormat, strtotime($date));
        return $this;
    }

}
