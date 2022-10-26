<?php

namespace Equifax\CreditHistory\Main;

/**
 * Трейт Books
 * @version 0.0.1
 * @package Equifax\CreditHistory\Main
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
trait Books
{

    public $code = false;
    public $name = false;

    private function __construct()
    {
        if (isset($this->default)) {
            $this->set($this->default);
        }
    }

    /**
     * Хранение текущего объекта
     * @var self
     */
    private static $object;

    /**
     * Реализация Solid
     * @return self
     */
    public static function instance(): self
    {
        if ( ! self::$object) {
            self::$object = new self();
        }
        return self::$object;
    }

    /**
     * Установка значений из библиотеки по наименованию
     * @param string|int $str
     * @return self
     */
    public function set($str): self
    {
        foreach (self::$data as $name => $code) {
            if (mb_strtolower($str) === mb_strtolower($name)) {
                $this->code = $code;
                $this->name = $name;
                return $this;
            }
            if ($str === $code) {
                $this->code = $code;
                $this->name = $name;
                return $this;
            }
        }
        if ( ! $this->code AND ! $this->name and isset($this->default)) {
            return $this->set($this->default);
        }
        return $this;
    }

    public static function getValues(): array
    {
        return self::$data;
    }

}
