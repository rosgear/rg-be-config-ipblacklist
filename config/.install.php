<?php
/**
 * Этот файл является частью расширения модуля веб-приложения RosGear.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'id'          => 'rg.be.config.ipblacklist',
    'moduleId'    => 'rg.be.config',
    'name'        => 'IP Blacklist',
    'description' => 'Prevent users from accessing the control panel or site from specified IP addresses',
    'namespace'   => 'Rg\Backend\Config\IpBlackList',
    'path'        => '/rg/rg.be.config.ipblacklist',
    'route'       => 'ipblacklist',
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['any', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM'],
        ['module', 'id' => 'rg.be.config']
    ]
];
