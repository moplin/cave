<?php
// Lets me add parameters to config
//Just rename to config.php and change your stuff
return [
    'cookieValidationKey' => '', //https://randomkeygen.com/
    'mongodb' => [
        'class' => '\yii\mongodb\Connection',
        'dsn' => 'mongodb://localhost:27017/mydb',
    ],
];
