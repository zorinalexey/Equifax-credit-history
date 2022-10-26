<?php

namespace Equifax\CreditHistory\ReferenceBooks;

if ( ! defined('ROOT')) {
    exit();
}

/**
 * Класс TypesOfCollateralAndNonMonetaryGrantsUnderTheTransaction
 * Виды предметов залога и неденежных предоставлений по сделке
 * @version 0.0.1
 * @package Equifax\CreditHistory\ReferenceBooks\TypesOfCollateralAndNonMonetaryGrantsUnderTheTransaction
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class TypesOfCollateralAndNonMonetaryGrantsUnderTheTransaction
{

    use \Equifax\CreditHistory\Main\Books;

    private static array $data = [
        'Недвижимость, за исключением судов и космических объектов' => 1,
        'Здание' => 1.1,
        'Сооружение' => 1.2,
        'Помещение' => 1.3,
        'Машино-место' => 1.4,
        'Объект незавершенного строительства' => 1.5,
        'Земельный участок' => 1.6,
        'Единый недвижимый комплекс' => 1.7,
        'Имущественный комплекс' => 1.8,
        'Транспортные средства' => 2,
        'Самоходная машина' => 2.1,
        'Иное транспортное средство' => 2.2,
        'Машины и оборудование' => 3,
        'Сельскохозяйственное оборудование' => 3.1,
        'Оборудование для строительства' => 3.2,
        'Оборудование для добычи полезных ископаемых' => 3.3,
        'Оборудование нефтеперерабатывающей и нефтехимической промышленности' => 3.4,
        'Оборудование черной и цветной металлургии' => 3.5,
        'Оборудование металлообрабатывающее' => 3.6,
        'Оборудование деревообрабатывающее и целлюлозно-бумажной промышленности' => 3.7,
        'Энергетическое оборудование' => 3.8,
        'Оборудование легкой промышленности' => 3.9,
        'Оборудование пищевой промышленности' => '3.10',
        'Медицинское оборудование' => 3.11,
        'Вычислительное и телекоммуникационное оборудование' => 3.12,
        'Иные машины и оборудование' => 3.99,
        'Воздушные суда' => 4,
        'Самолет' => 4.1,
        'Вертолет' => 4.2,
        'Иные воздушные суда' => 4.99,
        'Плавучие сооружения' => 5,
        'Судно для перевозки пассажиров и их багажа' => 5.1,
        'Судно для перевозки грузов или буксировки, а также для хранения грузов' => 5.2,
        'Судно для рыболовства' => 5.3,
        'Судно для иных целей' => 5.4,
        'Плавучее сооружение, не являющееся судном' => 5.5,
        'Железнодорожный подвижной состав' => 6,
        'Локомотив' => 6.1,
        'Самоходная единица специального железнодорожного подвижного состава' => 6.2,
        'Вагон моторвагонного подвижного состава' => 6.3,
        'Грузовой вагон' => 6.4,
        'Пассажирский вагон локомотивной тяги' => 6.5,
        'Вагон высокоскоростного железнодорожного подвижного состава' => 6.6,
        'Несамоходная единица специального железнодорожного подвижного состава' => 6.7,
        'Космические объекты' => 7,
        'Космический объект' => 7.1,
        'Товары в обороте' => 8,
        'Сельскохозяйственная продукция, в том числе продукты растениеводства' => 8.1,
        'Животные заменимые' => 8.1,
        'Продукты пищевые, напитки, изделия табачные' => 8.2,
        'Драгоценные металлы и драгоценные камни' => 8.3,
        'Ювелирные и другие изделия из драгоценных металлов или драгоценных камней' => 8.4,
        'Строительные и отделочные материалы, металлопродукция' => 8.5,
        'Транспортные средства, оборудование, комплектующие и запасные части к ним' => 8.6,
        'Текстиль и изделия текстильные' => 8.7,
        'Топливно-энергетические ресурсы' => 8.9,
        'Вещества химические и продукты химические' => '8.10',
        'Средства лекарственные и материалы, применяемые в медицинских целях' => 8.11,
        'Иные товары в обороте' => 8.99,
        'Будущие урожаи' => 9,
        'Зерновые культуры' => 9.1,
        'Зернобобовые культуры' => 9.2,
        'Масличные культуры' => 9.3,
        'Технические культуры' => 9.4,
        'Кормовые культуры' => 9.5,
        'Бахчевые культуры' => 9.6,
        'Картофель' => 9.7,
        'Овощи' => 9.8,
        'Многолетние насаждения' => 9.9,
        'Иные будущие урожаи' => 9.99,
        'Аффинированные драгоценные металлы в слитках' => 10,
        'Золото' => 10.1,
        'Серебро' => 10.2,
        'Платина' => 10.3,
        'Палладий' => 10.4,
        'Исключительные права на результат интеллектуальной деятельности' => 11,
        'Произведение науки, литературы или искусства' => 11.1,
        'Программа для электронных вычислительных машин (ЭВМ)' => 11.2,
        'База данных' => 11.3,
        'Изобретение' => 11.4,
        'Секрет производства (ноу-хау)' => 11.5,
        'Товарный знак или знак обслуживания' => 11.6,
        'Иные исключительные права на результат интеллектуальной деятельности' => 11.99,
        'Права по договору банковского счета' => 12,
        'Права в отношении всей денежной суммы на залоговом счете в любой момент в течение времени действия договора залога' => 12.1,
        'Права в отношении денежной суммы, размер которой указан в договоре залога' => 12.2,
        'Доли в уставном капитале общества с ограниченной ответственностью' => 13,
        'Доля в уставном капитале общества с ограниченной ответственностью' => 13.1,
        'Векселя' => 14,
        'Вексель' => 14.1,
        'Эмиссионные ценные бумаги' => 15,
        'Акция' => 15.1,
        'Облигация' => 15.2,
        'Опцион эмитента' => 15.3,
        'Депозитарная расписка' => 15.4,
        'Иные эмиссионные ценные бумаги' => 15.99,
        'Инвестиционные паи' => 16,
        'Инвестиционный пай' => 16.1,
        'Ипотечные сертификаты участия' => 17,
        'Ипотечный сертификат участия' => 17.1,
        'Прочие ценные бумаги' => 18,
        'Закладная' => 18.1,
        'Депозитный сертификат' => 18.2,
        'Сберегательный сертификат' => 18.3,
        'Иные прочие ценные бумаги' => 18.99,
        'Прочие имущественные права' => 19,
        'Право аренды или пользования' => 19.1,
        'Права участника долевого строительства' => 19.2,
        'Имущественные права на недвижимое имущество' => 19.3,
        'Иные прочие имущественные права' => 19.99,
        'Прочие движимые вещи' => 20,
        'Животное, индивидуально определенное' => 20.1,
        'Монета, содержащая драгоценные металлы' => 20.2,
        'Предмет бытового использования (бытовая техника, мебель и другое)' => 20.3,
        'Иные прочие движимые вещи' => 20.99
    ];

}
