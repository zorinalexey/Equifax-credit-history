<?php

namespace Equifax\CreditHistory\XmlGenerator\Xml\Traits;

use Equifax\CreditHistory\Individual;
use \Equifax\CreditHistory\ReferenceBooks\DocumentTypes;
use \Equifax\CreditHistory\ReferenceBooks\Birth;

/**
 * Трейт IndividualGenerator
 * @version 0.0.1
 * @package Equifax\CreditHistory\XmlGenerator\Xml\Traits
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait IndividualGenerator
{

    private static $individualComments = [
        'date' => 'Дата',
        'end_date' => 'Дата',
        'country' => 'Код страны по ОКСМ',
        'place' => 'Место рождения',
        'who' => 'Кем выдан документ',
        'department_code' => 'Код подразделения',
        'number' => 'Номер документа',
        'serial' => 'Серия документа',
        'type' => 'Код документа',
        'country_text' => 'Наименование страны',
        'type_text' => 'Наименование документа'
    ];

    private function setIndividualClientInfo(Individual $client)
    {
        $this->startElement('name')
            ->addElement('last', $client->last, [], 'Фамилия клиента')
            ->addElement('first', $client->first, [], 'Имя клиента')
            ->addElement('middle', $client->middle, [], 'Отчество клиента')
            ->closeElement();
        $this->setIndividualDocument($client->getMainDocument())
            ->setBirth($client->getBirth());
        $history = $client->getHistory();
        if ($history instanceof Individual) {
            $this->setHistory($history);
        }
        return $this;
    }

    private function setBirth(Birth $birth): self
    {
        $this->startElement('birth', [], 'Дата и место рождения');
        foreach ($birth as $name => $value) {
            if (isset(self::$individualComments[$name])) {
                $comment = self::$individualComments[$name];
            } else {
                $comment = false;
            }
            $this->addElement($name, $value, [], $comment);
        }
        $this->closeElement();
        return $this;
    }

    private function setIndividualDocument(DocumentTypes $mainDocument): self
    {
        $this->startElement('doc', [], 'Документ, удостоверяющий личность');
        foreach ($mainDocument as $name => $value) {
            if (isset(self::$individualComments[$name])) {
                $comment = self::$individualComments[$name];
            } else {
                $comment = false;
            }
            $this->addElement($name, $value, [], $comment);
        }
        $this->closeElement();
        return $this;
    }

    public function setHistory($client): self
    {
        $this->startElement('history');
        $this->startElement('name')
            ->addElement('last', $client->last, [], 'Фамилия клиента')
            ->addElement('first', $client->first, [], 'Имя клиента')
            ->addElement('middle', $client->middle, [], 'Отчество клиента')
            ->closeElement();
        $this->setIndividualDocument($client->getMainDocument())
            ->setBirth($client->getBirth());
        $this->closeElement();
        return $this;
    }

}
