<?php

namespace Equifax\CreditHistory;

if ( ! defined('ROOT')) {
    exit();
}

use \Equifax\CreditHistory\ReferenceBooks\DocumentTypes;
use \Equifax\CreditHistory\ReferenceBooks\Birth;

/**
 * Класс Individual
 * @version 0.0.1
 * @package Equifax\CreditHistory\Individual
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class Individual implements ClientInterface
{

    /**
     * Титульная часть СКИ ФЛ
     * @var string
     */
    public string $type = 'private';

    /**
     * Имя
     * @var string|null
     */
    public ?string $first;

    /**
     * Фамилия
     * @var string|null
     */
    public ?string $last;

    /**
     * Отчество
     * @var string|null
     */
    public ?string $middle;

    /**
     * Основной документ клиента
     * @var DocumentTypes|null
     */
    private ?DocumentTypes $mainDocument;
    private ?Birth $birth;
    private ?Individual $history;

    /**
     * Установить параметры основного документа клиента
     * @param string $documentName Наименование документа
     * @return DocumentTypes
     */
    public function mainDocument(string $documentName = 'Паспорт гражданина Российской Федерации'): DocumentTypes
    {
        $document = (new DocumentTypes)->set($documentName);
        $this->mainDocument = $document;
        return $this->mainDocument;
    }

    public function getMainDocument(): DocumentTypes
    {
        return $this->mainDocument;
    }

    public function birth(string $date, string $place, string $coutryName = 'РОССИЯ'): self
    {
        $this->birth = new Birth();
        $this->birth->date($date)
            ->country($coutryName)
            ->place($place);
        return $this;
    }

    public function getBirth(): ?Birth
    {
        return $this->birth;
    }

    public function history(): Individual
    {
        $this->history = new Individual();
        return $this->history;
    }

    public function getHistory(): ?Individual
    {
        return $this->history;
    }

}
