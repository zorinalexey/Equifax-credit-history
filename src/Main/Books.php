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
abstract class Books
{

    /**
     * Значение кода параметра
     * @var string|int
     */
    public $code = false;

    /**
     * Значение параметра справочника
     * @var type
     */
    public $name = false;

    final private function __construct()
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
    final public static function instance(): self
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

    /**
     * Получить все возможные значения справочника
     * @return array
     */
    final public static function getValues(): array
    {
        return self::$data;
    }

}
