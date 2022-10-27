<?php

namespace Equifax\CreditHistory;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс Individual
 * @version 0.0.1
 * @package Equifax\CreditHistory\Individual
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
class Individual implements Client
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

}
