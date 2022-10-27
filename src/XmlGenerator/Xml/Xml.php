<?php

namespace Equifax\CreditHistory\XmlGenerator\Xml;

if ( ! defined('ROOT')) {
    exit();
}

use \XMLWriter;

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

    private static ?XMLWriter $xml;

    public function __construct()
    {
        self::$xml = new XMLWriter();
        self::$xml->openMemory();
        self::$xml->startDocument('1.0', 'utf-8');
        $this->startElement('fch', ['version' => '4.0']);
    }

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

    public function setAttribute(string $attrName, $value): self
    {
        self::$xml->startAttribute($attrName);
        self::$xml->text($value);
        self::$xml->endAttribute();
        return $this;
    }

    public function closeElement(): self
    {
        self::$xml->endAttribute();
        return $this;
    }

    public function get(bool $save = true, $dir = ROOT . 'files'): array
    {
        $fileName = false;
        $this->closeElement();
        self::$xml->endDocument();
        $xml = self::$xml->outputMemory(true);
        if ($save) {
            $fileName = $dir . DIRECTORY_SEPARATOR . time() . '.xml';
            $this->save($fileName, $xml);
        }
        return ['xml' => $xml, 'file' => $fileName];
    }

    public function save(string $fileName, string $fileContent): bool
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

}
