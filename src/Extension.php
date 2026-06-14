<?php
/**
 * Расширение модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\Config\IpBlackList;

/**
 * Расширение "Чёрный список IP-адресов".
 * 
 * Ограничение доступа по IP-адресу к Панели управления или сайту.
 * 
 * Расширение принадлежит модулю "Конфигурация".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\Config\IpBlackList
 * @since 1.0
 */
class Extension extends \Ge\Panel\Extension\Extension
{
    /**
     * {@inheritdoc}
     */
    public string $id = 'rg.be.config.ipblacklist';

    /**
     * {@inheritdoc}
     */
    public string $defaultController = 'grid';
}