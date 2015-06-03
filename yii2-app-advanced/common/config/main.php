<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'db' => [
        'class' => 'yii/db/Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2build',
        'username' => 'abc',
        'password' => 'abc@123',
        'charset' => 'utf8',
    ],
];
