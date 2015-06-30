<?php
/**
 * Created by PhpStorm.
 * User: bug
 * Date: 22.06.15
 * Time: 18:48
 */

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'tZ_RrBX7OvzjL1mHW1d0zE5XeI-O3RkX',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] =  ['class' => \yii\debug\Module::className(), 'allowedIPs' => ['*']];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = ['class' => \yii\gii\Module::className(), 'allowedIPs' => ['*']];
}

return $config;
