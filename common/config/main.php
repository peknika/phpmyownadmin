<?php

use kartik\icons\Icon;
use src\Core\Domain\Mapper\MapService;
use src\Core\Infrastructure\Repository\RecordRepository;
use src\Modules\ListContext\Domain\Repository\ListRepositoryInterface;
use src\Modules\ListContext\Infrastructure\Repository\ListRepository;
use src\Modules\Query\Domain\Repository\QueryRepositoryInterface;
use src\Modules\Query\Infrastructure\Repository\QueryRepository;
use src\Modules\Sidebar\Domain\Repository\SidebarRepositoryInterface;
use src\Modules\Sidebar\Infrastructure\Repository\SidebarRepository;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'params' => ['icon-framework' => \kartik\icons\Icon::FAS],  // Font Awesome Icon framework
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
 //       'urlManager' => require __DIR__ . '/url_manager.php',
    ],
    'container' => [
        'singletons' => [
            SidebarRepositoryInterface::class => SidebarRepository::class,
            QueryRepositoryInterface::class => QueryRepository::class,
            MapService::class => MapService::class,
            RecordRepository::class => RecordRepository::class,
            ListRepositoryInterface::class => ListRepository::class,
            ]
    ],
];
