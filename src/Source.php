<?php

namespace Equifax\CreditHistory;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс Source
 * @version 0.0.1
 * @package Equifax\CreditHistory\Source
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class Source
{

    public string $date = '';

    public function __construct()
    {
        $this->date = date("d.m.Y");
        $this->file_reg_date = $this->date;
        $this->file_reg_num = 1;#time() . random_int(10000, 99999);
    }

    /**
     * ИНН источника
     * @var string|null
     */
    public string $source_inn = '';

    /**
     * ОГРН источника/ОГРНИП источника
     * @var string|null
     */
    public string $source_ogrn = '';

    /**
     * Исходящая регистрационная дата файла
     * @var string|null
     */
    public string $file_reg_date = '';

    /**
     * Исходящий регистрационный номер файла
     * @var string|null
     */
    public string $file_reg_num = '';

    /**
     * Информация о файле вместо которого выгружается данный файл
     * ключ - номер отбракованого файла
     * значение - дата отбракованого файла
     * @var array
     */
    public array $prev_file = [];

}
