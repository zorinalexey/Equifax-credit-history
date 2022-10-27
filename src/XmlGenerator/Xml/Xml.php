<?php

namespace Equifax\CreditHistory\XmlGenerator\Xml;

if ( ! defined('ROOT')) {
    exit();
}

use \XMLWriter;
use \Equifax\CreditHistory\Source;
use \Equifax\CreditHistory\Client;
use \Equifax\CreditHistory\Individual;

/**
 * Класс Xml
 * @version 0.0.1
 * @package Equifax\CreditHistory\Xml\Xml
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class Xml
{

    const dateFormat = 'd.m.Y';

    /**
     * Объект XML конструктора
     * @var XMLWriter|null
     */
    private static ?XMLWriter $xml;

    /**
     * Информационный объект о кредитной организации
     * @var Source|null
     */
    private ?Source $source;

    public function __construct(Source $source, Client $client)
    {
        $this->source = $source;
        self::$xml = new XMLWriter();
        self::$xml->openMemory();
        self::$xml->startDocument('1.0', 'utf-8');
        $this->startElement('fch', ['version' => '4.0']);
        $this->addSource($source);

        $this->startElement('info');
        $this->addClientInfo($client);
        $this->closeElement();
        $this->closeElement();
    }

    /**
     * Добавить элемент с его значением
     * @param string $name Наименование элемента
     * @param type $value Значение элемента
     * @param array $attributes Атрибуты элемента
     * @param string|null $comment Коментарий элемента
     * @return $this
     */
    public function addElement(string $name, $value, array $attributes = [], ?string $comment = null)
    {
        if ($value) {
            $this->startElement($name, $attributes, $comment);
            self::$xml->text($value);
            $this->closeElement();
        }
        return $this;
    }

    /**
     * Открыть новый элемент
     * @param string $name Наименование элемента
     * @param array $attributes Атрибуты элемента
     * @param string|null $comment Коментарий элемента
     * @return self
     */
    public function startElement(string $name, array $attributes = [], ?string $comment = null): self
    {
        if ($comment) {
            self::$xml->startComment();
            self::$xml->text($comment);
            self::$xml->endComment();
        }
        self::$xml->startElement(mb_strtolower($name));
        foreach ($attributes as $attrName => $value) {
            $this->setAttribute($attrName, $value);
        }
        return $this;
    }

    /**
     * Установить атрибут элемента
     * @param string $attrName
     * @param type $value
     * @return self
     */
    public function setAttribute(string $attrName, $value): self
    {
        if ($value !== false) {
            self::$xml->startAttribute($attrName);
            self::$xml->text($value);
            self::$xml->endAttribute();
        }
        return $this;
    }

    /**
     * Закрыть ранее открытый элемент
     * @return self
     */
    public function closeElement(): self
    {
        self::$xml->endElement();
        return $this;
    }

    /**
     * Получить сформированый отчет
     * @param type $dir Дирректория для сохранения файла отчета
     * @param bool $save true - сохранять в файл, false - не сохранять вывод в файл
     * @return array
     */
    public function get($dir, bool $save = true): array
    {
        $fileName = false;
        $this->closeElement();
        self::$xml->endDocument();
        $xml = self::$xml->outputMemory(true);
        if ($save) {
            $fileName = $dir . DIRECTORY_SEPARATOR . $this->source->file_reg_num . '.xml';
            $this->save($fileName, $xml);
        }
        return ['xml' => $xml, 'file' => $fileName];
    }

    /**
     * Сохранить вывод в файл
     * @param string $fileName Полнуть путь файла
     * @param string $fileContent Содержимое файла
     * @return bool
     */
    private function save(string $fileName, string $fileContent): bool
    {
        $dir = dirname($fileName);
        if ( ! is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        if (file_put_contents($fileName, $fileContent)) {
            return true;
        }
        return false;
    }

    /**
     * Информация о кредитной организации
     * @param Source $source
     * @return self
     */
    private function addSource(Source $source): self
    {
        if ($source) {
            $this->startElement('head')
                ->addElement('source_inn', $source->source_inn, [], 'ИНН кредитной организации')
                ->addElement('source_ogrn', $source->source_ogrn, [], 'ОГРН или ОГРНИП кредитной организации')
                ->addElement('date', date(self::dateFormat, strtotime($source->date)), [], 'Дата формирования файла')
                ->addElement('file_reg_date', $source->file_reg_date, [], 'Дата регистрации файла')
                ->addElement('file_reg_num', $source->file_reg_num, [], 'Регистрационный номер файла');
            if ($source->prev_file) {
                $number = array_keys($source->prev_file);
                $date = array_values($source->prev_file);
                $this->startElement('prev_file', [], 'Информацио об отклоненном ранее файле кредитной истории')
                    ->addElement('file_reg_date', date(self::dateFormat, strtotime($date[0])), [], 'Дата регистрации отклоненного файла')
                    ->addElement('file_reg_num', $number[0], [], 'Регистрационный номер отклоненного файла');
            }
            $this->closeElement();
        }
        return $this;
    }

    private function addClientInfo(Client $client)
    {
        $this->startElement($client->type);
        if ($client instanceof Individual) {
            $this->setIndividualClientInfo($client);
        } else {
            $this->setEntityClientInfo($client);
        }
        $this->closeElement();
    }

    private function setIndividualClientInfo(Individual $client)
    {
        $this->startElement('name')
            ->addElement('last', $client->last)
            ->addElement('first', $client->first)
            ->addElement('middle', $client->middle)
            ->closeElement();
    }

    private function setEntityClientInfo(Entity $client)
    {

    }

}
