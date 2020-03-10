<?php

use src\Modules\Query\Infrastructure\Repository\QueryRepository;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
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
            QueryRepository::class => QueryRepository::class
        ]
    ]
];
