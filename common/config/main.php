<?php

use src\Core\Domain\Mapper\MapService;
use src\Modules\Query\Domain\Repository\QueryRepositoryInterface;
use src\Modules\Query\Infrastructure\Repository\QueryRepository;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => require __DIR__ . '/url_manager.php',
    ],
    'container' => [
        'singletons' => [
            QueryRepositoryInterface::class => QueryRepository::class,
            MapService::class => MapService::class

        ]
    ],
];
