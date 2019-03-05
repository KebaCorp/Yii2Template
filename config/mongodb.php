<?php

return [
    'class' => '\yii\mongodb\Connection',
    'dsn' => 'mongodb://' . env('MONGO_DB_HOST') . ':' . env('MONGO_DB_PORT') . '/' . env('MONGO_DB_DATABASE'),
    'options' => [
        'username' => env('MONGO_DB_USERNAME'),
        'password' => env('MONGO_DB_PASSWORD'),
    ]
];
