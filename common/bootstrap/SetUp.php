<?php

namespace common\bootstrap;

use yii\base\BootstrapInterface;
use frontend\services\contact\ContactService;
use yii\mail\MailerInterface;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app): void
    {
        $container = \Yii::$container;

        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });

        $container->setSingleton(ContactService::class, [], [
            $app->params['adminEmail']
        ]);
    }
}