<?php

namespace common\bootstrap;

use yii\base\BootstrapInterface;
use frontend\services\contact\ContactService;
use frontend\services\auth\PasswordResetService;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app): void
    {
        $container = \Yii::$container;

        $container->setSingleton(PasswordResetService::class);

        $container->setSingleton(ContactService::class, [], [
            $app->params['adminEmail']
        ]);
    }
}