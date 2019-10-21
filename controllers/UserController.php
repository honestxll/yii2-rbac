<?php

namespace app\controllers;

use Yii;
use yii\web\Cookie;
use app\controllers\common\BaseController;
use app\models\User;
use app\services\UrlService;

class UserController extends BaseController
{
    public function actionVlogin()
    {
        $uid = $this->get('uid', 0);
        $home = UrlService::buildUrl('/');

        if (!$uid) {
            return $this->redirect($home);
        }

        $user = User::find()->where(['id' => $uid])->one();
        if (!$user) {
            return $this->redirect($home);
        }
        $this->createLoginStatus($user);
        return $this->redirect($home);
    }

    public function actionLogin()
    {
        return $this->render('login', [
            'host' => $_SERVER['HTTP_HOST']
        ]);
    }

}
